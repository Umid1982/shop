<?php

namespace App\Http\Requests\Stock;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'dateFrom' => ['required', 'string', Rule::exists('stocks', 'dateFrom')],
            'dateTo' => ['required', 'string', Rule::exists('stocks', 'dateTo')],
            'key' => ['required', 'string'],
            'limit' => ['nullable', 'integer']
        ];
    }
}
