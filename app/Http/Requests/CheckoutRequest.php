<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_lengkap' => 'required|string|max:255',
            'pengiriman' => 'required|string',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:11',
            'zipcode' => 'required|string|max:10',
            'produk_id' => 'required|integer',
            'jumlah' => 'required|integer|min:1',
            'total' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'nama_lengkap.string' => 'Nama lengkap harus berupa teks.',
            'nama_lengkap.max' => 'Nama lengkap tidak boleh lebih dari 255 karakter.',

            'pengiriman.required' => 'Jenis pengiriman wajib diisi.',
            'pengiriman.string' => 'Jenis pengiriman harus berupa teks.',

            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat tidak boleh lebih dari 255 karakter.',

            'no_telepon.required' => 'Nomor telepon wajib diisi.',
            'no_telepon.string' => 'Nomor telepon harus berupa teks.',
            'no_telepon.max' => 'Nomor telepon tidak boleh lebih dari 11 karakter.',

            'zipcode.required' => 'Kode pos wajib diisi.',
            'zipcode.string' => 'Kode pos harus berupa teks.',
            'zipcode.max' => 'Kode pos tidak boleh lebih dari 10 karakter.',

            'produk_id.required' => 'Produk ID wajib diisi.',
            'produk_id.integer' => 'Produk ID harus berupa angka.',

            'jumlah.required' => 'Jumlah produk wajib diisi.',
            'jumlah.integer' => 'Jumlah produk harus berupa angka.',
            'jumlah.min' => 'Jumlah produk minimal adalah 1.',

            'total.required' => 'Total harga wajib diisi.',
            'total.numeric' => 'Total harga harus berupa angka.',
        ];
    }

}
