<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterServiceRequest extends FormRequest
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
            'inter_email' => 'required|email',
            'inter_name'  => 'required',
            'inter_tel'   => 'required',
            'inter_direction'=> 'required|max:250'        
        ];
    }
}
