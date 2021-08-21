<?php

namespace App\Http\Requests\favorites;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
            'url'=> ['required', 'max:255', 'url', Rule::unique('favorites')->where(function ($query) {
                return $query->where('user_id', Auth::user()->id);
            })],
            'tema'=>'required|max:255',
        ];
    }

    public function messages()
    {
        return [

            'titulo.required'=>'Este campo es requerido',
            'titulo.max'=>'El valor de este campo no puede exceder los 255 caracteres',

            'url.required'=>'Este campo es requerido',
            'url.unique'=>'Esta URL ya existe entre tus favoritos',
            'url.url'=>'La direccion URL es incorrecta',

            'tema.required'=>'Este campo es requerido',
            'tema.max'=>'El valor de este campo no puede exceder los 255 caracteres',
        ];
    }
}
