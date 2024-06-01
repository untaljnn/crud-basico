<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nombre' => ['required', 'string', 'min:3'],
            'apellido_paterno' => ['required', 'string', 'min:3'],
            'apellido_materno' => ['required', 'string', 'min:3'],
            'numero_control' => ['required', 'string', 'unique:estudiantes,numero_control', 'max:9', 'min:9'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
