<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EscuelasUpdateRequest extends FormRequest
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
            'matricula' => 'required',
            'nombre_esc' => 'required',
            'id_nivel' => 'required',
            'direccion' => 'required',
        ];
    }
     public function messages()
{
    return [
        'nombre_esc.required'   => 'El nombre de la escuela es un campo obligatorio.',
        'id_nivel.required'   => 'El nivel al que pertenece la escuela no puede quedar vacio', 
        'matricula.required'   => 'La matricula de la escuela es un campo obligatorio.',
        'direccion.required'   => 'La direccion de la escuela es un campo obligatorio.', 
        
    ];
}
}
