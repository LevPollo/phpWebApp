<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changeProfile extends FormRequest
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
//            'name'=> 'required|string|max:255|unique:users',
//            'password' => 'required|confirmed|min:8',
//            'phone' => 'required|numeric|digits:12',
//            'email' => 'required|string|email|unique:users',
//            'first_name' => 'required|string',
//            'last_name' => 'required|string',
            'age' => 'required|numeric|digits:2',

        ];
    }
}
