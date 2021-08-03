<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'image'
            // 'name'=> 'required',
            // 'image' => 'required|mimes:jpg,jpeg,png,svg,bmp',
            // // 'email'=> 'required|min:5|max:25|email:rfc,dns|unique:users,email',
            // 'phone' => 'required|max:75',
            // 'title' => 'required',
            // 'description' => 'required',
            // 'password' =>'required|min:5|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib di isi',
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi',
            'image.required' => 'Gambar wajib di isi',
            'phone' => "Phone wajib di isi",
            'title' => "Title wajib di isi",
            'description' => "Description wajib di isi",
        ];
    }
}
