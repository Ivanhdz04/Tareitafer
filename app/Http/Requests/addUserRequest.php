<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addUserRequest extends FormRequest
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

                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:4',
                'passwordConfirm' => 'required|same:password'
        ];
    }
    
    public function messages():array{
        return[
            'name.required' => 'Pon tu nombre bien tontuelo',
            'email.required' => 'eres un tontuelo',
            'password' => 'canelita sin contraseña',
            'passwordConfirm' => 'canelita no tiene contraseña'
        ];
    }    
}

