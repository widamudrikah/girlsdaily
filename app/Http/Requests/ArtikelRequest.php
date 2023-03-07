<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'judul_artikel'                         => 'required',
            'artikel'                  => 'required',
            'foto_artikel'                 => 'required',

        ];
    }

    public function messages()
    {
        return [
            'judul_artikel.required'       => 'Silahkan Masukkan Judul Artikel !',
            'artikel.required'             => 'Silahkan Masukkan Isi Artikel',
            'foto_artikel.required'        => 'Tolong Masukkan Foto Artikel',
            
        ];
        
    }
}
