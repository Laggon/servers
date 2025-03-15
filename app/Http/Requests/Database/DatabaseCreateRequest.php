<?php

namespace App\Http\Requests\Database;

use Illuminate\Foundation\Http\FormRequest;

class DatabaseCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'server_id' => ['required', 'string', 'exists:servers,id'],
        ];
    }
}
