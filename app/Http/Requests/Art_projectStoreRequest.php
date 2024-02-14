<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Art_projectStoreRequest extends FormRequest
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
            'budget' => 'required|string|min:0',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            // 'artists' => 'required|exists:users,id', 
            // 'partner_id' => 'required|exists:partners,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
