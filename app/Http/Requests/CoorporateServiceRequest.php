<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoorporateServiceRequest extends FormRequest
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
            'coor_email'=> 'required|email',
            'coor_tel'=> 'required',
            'coor_name'=> 'required',
            'coor_direction'=> 'required|max:250'
        ];
    }
}
