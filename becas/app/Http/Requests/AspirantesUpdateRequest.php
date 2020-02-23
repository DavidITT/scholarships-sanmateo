<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AspirantesUpdateRequest extends FormRequest
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
            
            'aPaterno' => 'required',
            'aMaterno' => 'required',
            'nombre' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'id_Barrio' => 'required',
            'id_Escuela' => 'required',
            'niv_educativo' => 'required',
            'grado' => 'required',
            'promedio' => 'required|Numeric|between:9.0,10.0',         
            'nPadre' => 'required',
            'nMadre' => 'required',
            'telefono' => 'required|regex:/^[0-9]{10}/',

        ];
    }

    public function messages()
{
    return [
        'aPaterno.required'   => 'El apellido paterno es obligatorio.',
        'aMaterno.required'   => 'El apellido materno es obligatorio.',
        'nombre.required'   => 'El nombre del aspirante es obligatorio.',
        'calle.required'   => 'El domicilio es obligatorio.',
        'numero.required'   => 'El numero de calle es obligatorio',
        'niv_educativo.required'   => 'El nivel educativo es obligatorio.',
        'id_Barrio.required' => 'Es necesario seleccione un barrio del municipio.',
        'id_Escuela.required' => 'Es necesario que ingrese una escuela.',
        'niv_educativo.required' => 'Es necesario que seleccione un nivel educativo.',
        'grado.required' => 'Es necesario que seleccione un grado escolar.',
        'promedio.required' => 'El campo de promedio es obligatorio.',
        'promedio.number' => 'El dato que ingeso no es un promedio',
        'promedio.between' => 'El promedio que ingreso no es valido',
        'nPadre.required' => 'Es necesario que ingrese el nombre del padre o tutor.',
        'nMadre.required' => 'Es necesario que ingrese el nombre de la madre o tutora.',
        'telefono.required' => 'Es necesario que ingrese un numero telefonico.',
        'telefono.regex' => 'El dato que ingreso no es un numero telefonico, deben ser 10 digitos.',
        
        
    ];
}
}
