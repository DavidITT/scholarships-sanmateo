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
            'n_folio' => 'required|unique:aspirantes',
            'aPaterno' => 'required',
            'aMaterno' => 'required',
            'nombre' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'niv_educativo' => 'required',
            'grado' => 'required',
            'promedio' => 'required|Numeric|between:9.0,10.0',
            'nPadre' => 'required|unique:aspirantes',
            'nMadre' => 'required|unique:aspirantes',
            'telefono' => 'required|unique:aspirantes',
            
        ];
    }
}
