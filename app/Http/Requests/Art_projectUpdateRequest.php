<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Art_projectUpdateRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'artists[]' => 'required|exists:artists,id', 
            'partner_id' => 'required|exists:partners,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
