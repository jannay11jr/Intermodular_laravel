<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CentroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre_centro' => 'required|min:4',
            'email' => 'required|email',
            //'password' => 'required|min:6',
            'password' => ['required', 'min:6', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
            'direccion' => 'required',
            'telefono' => 'required|numeric|digits:9',
            'provincia' => 'required|alpha',
            'poblacion' => 'required|alpha',
        ];
    }

    public function messages()
    {
        return ['nombre_centro.required' => 'El nombre de centro es obligatorio.',
        'nombre_centro.min' => 'El campo nombre de centro debe tener al menos 4 caracteres.',
        'email.required' => 'El email es obligatorio.',
        'email.email' => 'Ingrese una dirección de correo electrónico valida.',
        'password.required' => 'La contraseña es obligatoria',
        'password.min' => 'La contraseña debe tener al menos 6 caracteres',
        'password.regex' => 'La contraseña debe contener al menos una letra mayúscula, una letra minúscula y un número',
        'direccion.required' => 'La direccion es obligatoria',
        'telefono.required' => 'El telefono es obligatorio',
        'telefono.numeric' => 'El campo telefono solo admite numeros.',
        'telefono.digits' => 'El telefono debe tener 9 caracteres',
        'provincia.required' => 'La provincia es obligatoria',
        'provincia.alpha' => 'El campo provincia solo puede contener letras.',
        'poblacion.required' => 'La población es obligatoria',
        'poblacion.alpha' => 'El campo población solo puede contener letras',


        ];
    }
}
