<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Empresa extends FormRequest
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
            'nombre_empresa' => 'required|min:4',
            'cif' => ['required', 'regex:/^[ABCDEFGHJKLMNPQRSUVW]{1}\d{7}[ABCDEFGHJKLMNPQRSTUW]{1}$/'],
            'descripcion' => 'required|min:10',
            'notas' => 'required',
            'email' => 'required|email',
            'confirma_email' => 'required|email',
            'direccion' => 'required',
            'provincia' => 'required|alpha',
            'poblacion' => 'required|alpha'
        ];
    }
    public function messages()
    {
        return [ 'nombre_empresa.required' => 'El título es obligatorio',
        'nombre_empresa.min' => 'El campo nombre de la empresa debe tener al menos 4 caracteres.',
        'cif.required' => 'El campo CIF es obligatorio.',
        'cif.regex' => 'El campo CIF no tiene un formato válido',
        'descripcion.required' => 'El campo descripción es obligatorio.',
        'descripcion.min' => 'El campo descripción debe tener al menos 10 caracteres.',
        'notas.required' => 'El campo notas es obligatorio.',
        'email.required' => 'El campo email es obligatorio.',
        'email.email' => 'Ingrese una dirección de correo electrónico válida.',
        'confirma_email.required' => 'El campo confirmación de correo electrónico es obligatorio.',
        'confirma_email.email' => 'Ingrese una dirección de correo electrónico válida.',
        'confirma_email.same' => 'Los correos electrónicos no coinciden.',
        'direccion.required' => 'El campo dirección es obligatorio.',
        'provincia.required' => 'El campo provincia es obligatorio.',
        'provincia.alpha_only' => 'El campo provincia solo puede contener letras.',
        'poblacion.required' => 'El campo población es obligatorio.',
        'poblacion.alpha_only' => 'El campo población solo puede contener letras.'

        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->input('email') !== $this->input('confirma_email')) {
                $validator->errors()->add('confirma_email', 'Los correos electrónicos no coinciden.');
            }
        });
    }
}
