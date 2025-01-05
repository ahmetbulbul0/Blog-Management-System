<?php

namespace App\Http\Requests\Tag;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', Rule::unique('tags')->ignore($this->route('tag'))],
            'slug' => ['required', 'string', 'max:255', Rule::unique('tags')->ignore($this->route('tag'))]
        ];
    }
}