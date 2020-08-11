<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'username' => ['required', 'min:3', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'regex:/[a-z{1}A-Z{1}0-9{1}]+/'],
            'confirm_password' => ['required', 'same:password']
        ];
        // 'min:10',             // must be at least 10 characters in length
        // 'regex:/[a-z]/',      // must contain at least one lowercase letter
        // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
        // 'regex:/[0-9]/',      // must contain at least one digit
        // 'regex:/[@$!%*#?&]/', // must contain a special character
    }
}
