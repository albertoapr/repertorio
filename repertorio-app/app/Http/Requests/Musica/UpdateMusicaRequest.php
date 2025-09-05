<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMusicaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => ['required', 'string', 'max:255'], // obrigatório [2][10]
            'numero_harpa' => ['nullable', 'integer', 'min:1'], // opcional [7][10]
            'numero_coletanea' => ['nullable', 'integer', 'min:1'], // opcional [7][10]
            'ritmo' => ['nullable', 'string', 'max:50'], // opcional [10]
            'tom' => ['nullable', 'string', 'max:10'],   // opcional [10]
        ];
    }
}
