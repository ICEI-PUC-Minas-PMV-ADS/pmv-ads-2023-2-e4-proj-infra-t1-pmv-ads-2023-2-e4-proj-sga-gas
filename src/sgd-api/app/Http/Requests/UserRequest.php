<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $uniqueRule = 'unique:users';
        if ($this->method() == 'PATCH') {
            $uniqueRule = "unique:users,email," . $this->user . ",_id";
        }

        return [
            'name' => 'required|max:255',
            'email' => 'required|email|' . $uniqueRule,
            'fix_phone' => 'required',
            'cel_phone' => 'required',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'password' => 'required'
        ];
    }
}