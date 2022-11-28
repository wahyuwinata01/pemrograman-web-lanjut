<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KurirRequest extends FormRequest
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
            'nama' => ["required", "min:4"],
            'nik' => ["required", "min:11"],
            'alamat' => ["required", "min:4","max:50"],
        ];
    }
}
