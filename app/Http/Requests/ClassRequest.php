<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'category_id' => 'required',
            'user_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Judul wajib di isi',
            'description.required'      => 'Content wajib di isi',
            'description.min'      => 'Content Minimal 10 karakter',
            'photo.required'   => 'Gambar wajib di isi',
            'category_id.required' => 'Category wajib di isi ',
        ];
    }
}
