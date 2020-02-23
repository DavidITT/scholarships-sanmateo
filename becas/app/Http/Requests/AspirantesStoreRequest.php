<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AspirantesStoreRequest extends FormRequest
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
            'n_folio' => 'required|unique:aspirantes|regex:/^[0-9]+/',
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
            'nPadre' => 'required|unique:aspirantes',
            'nMadre' => 'required|unique:aspirantes',
            'telefono' => 'required|unique:aspirantes|regex:/^[0-9]{10}/',
            
        ];
    }
    
    public function messages()
    {
    return [
        'n_folio.required'   => 'El numero de folio es un campo obligatorio.',
        'n_folio.unique'   => 'El numero de folio que intenta ingresa ya existe',
        'n_folio.regex'   => 'El numero de folio debe ser numerico',
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
        'nPadre.unique' => 'El nombre del padre o tutor que intenta ingresar ya exite, verifique los datos.',
        'nMadre.required' => 'Es necesario que ingrese el nombre de la madre o tutora.',
        'nMadre.unique' => 'El nombre de la madre o tutora que intenta ingresar ya exite, verifique los datos.',
        'telefono.required' => 'Es necesario que ingrese un numero telefonico.',
        'telefono.unique' => 'Es numero telefonico que intenta ingresar ya existe, verifique la información.',
        'telefono.regex' => 'El dato que ingreso no es un numero telefonico, deben ser 10 digitos.',
        ];
    }
}
