<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class commentForm extends FormRequest
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
            "text" => ["required", "string", "min:5"],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "user_id" => auth("web")->id()
        ]);
    }
}
