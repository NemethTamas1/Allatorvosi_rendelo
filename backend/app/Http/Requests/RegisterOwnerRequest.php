<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterOwnerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>["required", "string", "min:0"],
            'address'=>["required", "string"],
            'phone'=>["required", "string", "min:0"],
            'email'=>["required", "string", "email:rfc"],
            'password'=>["required", "string", "min:8"],
        ];
    }
}
