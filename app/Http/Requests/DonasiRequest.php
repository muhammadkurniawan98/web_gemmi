<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonasiRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama_donatur'  => 'required|string|max:255',
            'nama_penerima' => 'required|string|max:255',
            'alamat'        => 'required|string|max:255',
            'no_telepon'    => 'required|regex:/^[0-9]+$/',
            'jenis_donasi'  => 'required|string|max:255',
            'bukti_donasi'  => 'required|mimes:png,jpg,jpeg|max:2048',
            'tanggal'       => 'required|date_format:Y-m-d',
        ];
    }
}
