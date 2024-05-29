<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrakerjaRequest extends FormRequest
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
    public function rules(): array{
        return [
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required|min:12',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'foto_user' => 'required|mimes:jpg,png'
            
        ];
    }
    public function message(): array{
        return [
            'nama.required' => 'Data Harus Diisikan',
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.mail' => 'Pastikan yang Dimasukkan Berupa Format Email',
            'telepon' => 'Pastikan Berisi Minimal 12 Digit',
            'alamat' => 'Data Harus Diisikan',
            'pendidikan_terakhir' => 'Data Harus Diisikan',
            'foto_user' => 'Pastikan Format File Berupa Jpg/Png'
            
        ];
    }
}
