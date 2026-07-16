<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'showtime_id' => 'required|integer|exists:showtimes,showtime_id',
            'nama_pemesan' => 'required|string|max:100',
            'jumlah_tiket' => 'required|integer|min:1',
            'total_harga' => 'required|numeric|min:0',
        ];
    }

    /**
     * Custom error messages.
     */
    public function messages(): array
    {
        return [
            'showtime_id.required' => 'Showtime harus dipilih.',
            'showtime_id.exists' => 'Showtime tidak ditemukan.',
            'nama_pemesan.required' => 'Nama pemesan wajib diisi.',
            'jumlah_tiket.required' => 'Jumlah tiket wajib diisi.',
            'jumlah_tiket.min' => 'Jumlah tiket minimal 1.',
            'total_harga.required' => 'Total harga wajib diisi.',
        ];
    }
}