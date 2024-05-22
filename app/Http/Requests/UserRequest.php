<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'rol' => 'required|string',
			'documento' => 'required|string',
			'name' => 'required|string',
			'apellidos' => 'required|string',
			'correo_electronico' => 'required|string',
			'contraseña' => 'required|string',
			'telefono' => 'required|string',
			'tipo_etapa' => 'required|string',
			'programa_formacion' => 'required|string',
			'ficha' => 'required|string',
			'instructor_asignado' => 'required|string',
        ];
    }
}
