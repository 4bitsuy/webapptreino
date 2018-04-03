<?php

namespace App\Traits;

trait DatesTrait{

  protected function getDateForDB($strDate){
    $dataDate = date_parse($strDate);
    $fchFormat = $dataDate['year'].'-'.$dataDate['month'].'-'.$dataDate['day'];

    return $fchFormat;
  }

}
