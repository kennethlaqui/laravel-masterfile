<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            'last_nme' => 'required',
            'birthday' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'last_nme.required' => 'Last name should have value',
            'birthday.required' => 'Birthday should have value'
        ];
    }
}
