<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorageProductRequest extends Request
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
        return [

            'product_code'  => 'required|max:100',
            'providers_id' => 'required|max:100',
            'categories_id'  => 'required|max:100',
            'product_name'  => 'required|max:100',
            'quatity'  => 'required|max:100',
            'purchase_price'  => 'required|max:100'
            
        ];
    }

    public function messages(){

        return [
        'product_code' => 'Debes escribir un codigo ',
        'product_name' => 'Debes escribir una Nombre'

        ];
    }
}
