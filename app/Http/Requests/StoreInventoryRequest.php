<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryRequest extends FormRequest
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
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'desc' => 'nullable|string',
            'category_id' => 'required|exists:inventory_categories,id',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Kode barang wajib diisi',
            'code.string' => 'Kode barang harus berupa teks',
            'code.max' => 'Kode barang maksimal 255 karakter',
            'name.required' => 'Nama barang wajib diisi',
            'name.string' => 'Nama barang harus berupa teks',
            'name.max' => 'Nama barang maksimal 255 karakter',
            'price.required' => 'Harga barang wajib diisi',
            'price.numeric' => 'Harga barang harus berupa angka',
            'stock.required' => 'Stok barang wajib diisi',
            'stock.numeric' => 'Stok barang harus berupa angka',
            'desc.string' => 'Deskripsi barang harus berupa teks',
            'category_id.required' => 'Kategori barang wajib diisi',
            'category_id.exists' => 'Kategori barang tidak ditemukan',
        ];
    }
}
