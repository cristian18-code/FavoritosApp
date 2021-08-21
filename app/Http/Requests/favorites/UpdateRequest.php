<?php

namespace App\Http\Requests\favorites;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'titulo'=>'required|max:255',
            'url'=> 'required|max:255|url',
            'tema'=>'required|max:255',
        ];
    }

    public function messages()
    {
        return [

            'titulo.required'=>'Este campo es requerido',
            'titulo.max'=>'El valor de este campo no puede exceder los 255 caracteres',

            'url.required'=>'Este campo es requerido',
            'url.max'=>'El valor de este campo no puede exceder los 255 caracteres',
            'url.url'=>'La direccion URL es incorrecta',

            'tema.required'=>'Este campo es requerido',
            'tema.max'=>'El valor de este campo no puede exceder los 255 caracteres',
        ];
    }
}