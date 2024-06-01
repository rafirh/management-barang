<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'desc' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama kategori barang wajib diisi',
            'name.string' => 'Nama kategori barang harus berupa teks',
            'name.max' => 'Nama kategori barang maksimal 255 karakter',
            'desc.string' => 'Deskripsi kategori barang harus berupa teks',
        ];
    }
}
