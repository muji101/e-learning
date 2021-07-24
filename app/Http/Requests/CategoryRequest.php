<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'description' => 'required|min:10',
            'photo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Judul wajib di isi',
            // 'title.string'          => 'Judul harus di isi dengan teks',
            // 'title.min'             => 'Judul minimal 10 karakter',
            // 'title.max'             => 'Judul maksimal 200 karakter',
            'description.required'      => 'Content wajib di isi',
            'description.min'      => 'Content Minimal 10 karakter',
            'photo.required'   => 'Gambar wajib di isi',
            // 'user_id.required'      => 'Penulis wajib di isi',
            // 'category_id.required'  => 'Kategori wajib di isi'
        ];
    }
}
