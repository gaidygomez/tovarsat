<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmRegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'ci' => ['required', 'numeric', 'digits_between: 6,8'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'ci.required' => 'Este campo es requerido',
            'email.required' => 'Este campo es requerido',
            'password.required' => 'Este campo es requerido',
            'ci.numeric' => 'Este campo debe ser solo números',
            'ci.digits_between' => 'Este campo debe tener entre 6 y 8 números',
            'email.email' => 'Este campo debe ser un email válido'
        ];
    }
}
