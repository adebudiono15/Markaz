<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CctvPackageRequest extends FormRequest
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
            'paket_kamera' => 'required',
            'merk_dvr' => 'required',
            'unit_kamera' => 'required',
            'hdd' => 'required',
            'kabel' => 'required',
            'kapasitas_psu' => 'required',
            'kabel_connector' => 'required',
            'tombol_wa' => 'required',
            'photo' => 'required'
        ];
    }
}
