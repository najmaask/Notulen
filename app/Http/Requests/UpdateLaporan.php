<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLaporan extends FormRequest
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
            'KdLaporan' => 'nullable',
            'TglLaporan' => 'required',
            'KdAnggota' => 'nullable',
            'done' => 'nullable',
            'problem' => 'nullable',
            'todo' => 'nullable',
            'KdAdmin' => 'nullable',
        ];
    }
}
