<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormularioRequest extends FormRequest
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
        'nombre'        => 'required|min:2|max:12',
        'apellido'      => 'required|min:5|max:30',
        'aniversario'   => 'required',
        
    ];
}
public function messages()
{
  return [
    'nombre.required'   => 'El :attribute es obligatorio.',
    'nombre.min'        => 'El :attribute debe contener mas de una letra.',
    'nombre.max'        => 'El :attribute debe contener max 12 letras.',

    'apellido.required'   => 'El :attribute es obligatorio.',
    'apellido.min'        => 'El :attribute debe contener mas de una letra.',
    'apellido.max'        => 'El :attribute debe contener max 30 letras.',

    'aniversario.required'   => 'El :attribute es obligatorio.',

];
}
public function attributes()
{
  return [
     'nombre'        => 'nombre de usuario',
     'apellido'        => 'apellido',
     'aniversario'        => 'aniversario',
 ];
}
}
