<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCategoyRequest extends Request
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

            'category_name'  => 'required|max:100',
            'descrition' => 'required|max:100'
            
        ];
    }

    public function messages(){

        return [
        'category_name' => 'Debes escribir un nombre de categoria',
        'descrition' => 'Debes escribir una descripción'

        ];
    }
}
