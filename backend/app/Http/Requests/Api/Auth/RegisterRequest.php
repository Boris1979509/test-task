<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegisterRequest
 * @package App\Http\Requests\Api\Auth
 */
class RegisterRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'     => ['required', 'max:255', 'min:2'],
            'email'    => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'between:6,255', 'confirmed'],
        ];
    }
}
