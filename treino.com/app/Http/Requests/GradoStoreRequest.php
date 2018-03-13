<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

      dd($request);

        return [
            'año' => 'required',
            'dsc' => 'required',
        ];
    }

    private function getDateForDB($strDate){
      $dataDate = date_parse($strDate);
      $fchFormat = $dataDate['year'].'-'.$dataDate['month'].'-'.$dataDate['day'];

      return $fchFormat;
    }
}
