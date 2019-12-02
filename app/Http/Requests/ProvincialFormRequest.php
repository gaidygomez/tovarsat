<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvincialFormRequest extends FormRequest
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
            'amount' => 'required|numeric',
            'brn' => 'required|numeric|digits_between:7,13',
            'bank' => 'required|numeric|digits:20',
            'date' => 'required',
            'file' => 'required|mimes:jpeg,png,pdf'
        ];
    }

    public function messages()
    {
        return [
            'amount.required' => 'Este campo es requerido',
            'amount.numeric' => 'Este campo debe contener solo números',
            'brn.required' => 'Este campo es requerido',
            'brn.numeric' => 'Este campo debe ser un número',
            'brn.digits_between' => 'Este campo debe contener entre 7 dígitos y  13 dígitos',
            'bank.required' => 'Este campo es requerido',
            'bank.numeric' => 'Este campo debe ser un número',
            'date.required' => 'Este campo es requerido',
            'file.required' => 'Este campo es requerido',
        ];
    }
}
