<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\linkWP\Posts;
use App\Models\linkWP\Terms;
use App\Models\linkWP\Taxonomy;
use App\Models\linkWP\RelTaxPosts;

class BlogController extends Controller
{

  public function index(){

    $noticias = $this->getNoticias();

    return view('blog.principal')->with('noticias', $noticias);
  }

  public function getEntrada($entrada){
    $n = Posts::where('post_name',$entrada)->first();

    $img = $this->getImagenNoticia($n->ID);

    $id_term = Terms::where('slug','blog')->first()->term_id;

    $id_blog = Taxonomy::where('term_id',$id_term)
                      ->where('Taxonomy','category')
                      ->first()->term_taxonomy_id;

    $idCategoria = $this->getCategoria($n->ID,$id_blog);

    $relacionadas = $this->getFromCategory($idCategoria, $n->ID);

    $noticia = array(
      'titulo' => $n->post_title,
      'fecha' => $n->post_date,
      'imagen' => $img,
      'contenido' => $n->post_content,
    );
    return view('blog.entrada')->with('entrada', $noticia)
                               ->with('noticias', $relacionadas);
  }

  private function getNoticias(){
    $id_term = Terms::where('slug','blog')->first()->term_id;

    $id_cat = Taxonomy::where('term_id',$id_term)
                      ->where('Taxonomy','category')
                      ->first()->term_taxonomy_id;

    $col_idNoticias = RelTaxPosts::where('term_taxonomy_id',$id_cat)->get();
    $noticias = [];

    foreach ($col_idNoticias as $idNoticia) {

      $wp_noticia = Posts::where('ID', $idNoticia->object_id)->first();

      $imagen = $this->getImagenNoticia($idNoticia->object_id);
      $categoria = $this->getCategoria($idNoticia->object_id, $id_cat);

      $noticia = array(
        'titulo' => $wp_noticia->post_title,
        'url' => $wp_noticia->post_name,
        'imagen' => $imagen,
        'categoria' => $categoria,
      );

      $noticias = \array_add($noticias, $idNoticia->object_id, $noticia);
    }
    return $noticias;
  }

  // investigar como obtenerlo desde el modelo
  private function getImagenNoticia($id){

    $hijo = Posts::where('post_parent',$id)
                  ->where('post_type','attachment')
                  ->first();

    if (is_null($hijo)){
      $url = '/images/blogDefault.jpg';
    }else{
      $url = env('WP_SITE').$hijo->guid;
    }

    return $url;
  }
  private function getCategoria($id, $idBlog){
    $idTaxonomy = RelTaxPosts::where('object_id', $id)
                              ->where('term_taxonomy_id', '<>', $idBlog)
                              ->first()->term_taxonomy_id;
    $idCategoria = Taxonomy::where('term_taxonomy_id', $idTaxonomy)->first()->term_id;
    $categoria = Terms::where('term_id', $idCategoria)->first()->name;
    return $categoria;
  }

  private function getFromCategory($idCat, $idEntrada){
    $id_term = Terms::where('slug',$idCat)->first()->term_id;

    $id_cat = Taxonomy::where('term_id',$id_term)
                      ->where('Taxonomy','category')
                      ->first()->term_taxonomy_id;

    $col_idNoticias = RelTaxPosts::where('term_taxonomy_id',$id_cat)
                                  ->where('object_id', '<>', $idEntrada)
                                  ->get();
    $noticias = [];

    foreach ($col_idNoticias as $idNoticia) {

      $wp_noticia = Posts::where('ID', $idNoticia->object_id)->first();

      $imagen = $this->getImagenNoticia($idNoticia->object_id);

      $noticia = array(
        'titulo' => $wp_noticia->post_title,
        'url' => $wp_noticia->post_name,
        'imagen' => $imagen,
      );

      $noticias = \array_add($noticias, $idNoticia->object_id, $noticia);
    }
    return $noticias;
  }
}
