<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        
    }

    public function rules()
    {
        return [
            'password' => 'required|min:6', 
            'new_password' => 'required|min:6', 
            'renew_password' => 'required|same:new_password|min:6', 
        ];
    }
}
