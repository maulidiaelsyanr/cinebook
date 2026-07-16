<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'judul' => 'required|string|max:100',
            'sinopsis' => 'required|string',
            'durasi' => 'required|integer|min:1',
            'rating_usia' => 'required|in:SU,R13,D17',
        ];
    }

    /**
     * Custom error messages.
     */
    public function messages(): array
    {
        return [
            'judul.required' => 'Judul film wajib diisi.',
            'sinopsis.required' => 'Sinopsis wajib diisi.',
            'durasi.required' => 'Durasi wajib diisi.',
            'durasi.integer' => 'Durasi harus berupa angka.',
            'rating_usia.required' => 'Rating usia wajib dipilih.',
            'rating_usia.in' => 'Rating usia harus SU, R13, atau D17.',
        ];
    }
}