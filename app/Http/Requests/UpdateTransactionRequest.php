<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionRequest extends FormRequest
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
            'qty' => 'sometimes|required|numeric',
            'type' => 'sometimes|required|in:Masuk,Keluar',
            'desc' => 'nullable|string|max:255',
            'date' => 'sometimes|required|date',
        ];
    }

    public function messages()
    {
        return [
            'inventory_id.required' => 'Barang wajib diisi',
            'inventory_id.exists' => 'Barang tidak ditemukan',
            'qty.required' => 'Jumlah barang wajib diisi',
            'qty.numeric' => 'Jumlah barang harus berupa angka',
            'type.required' => 'Tipe transaksi wajib diisi',
            'type.in' => 'Tipe transaksi harus berupa Masuk atau Keluar',
            'desc.string' => 'Deskripsoi transaksi harus berupa teks',
            'desc.max' => 'Deskripsi transaksi maksimal 255 karakter',
            'date.required' => 'Tanggal transaksi wajib diisi',
            'date.date' => 'Tanggal transaksi harus berupa tanggal',
        ];
    }
}
