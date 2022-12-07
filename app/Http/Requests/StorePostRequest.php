<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function messages()
    {
        return [
            'title.required' => 'Sarlavha kiritish majburish',
            'photo.image' => 'File turi rasm bo\'lishi kerak',
            'short_content.required' => 'Qisqacha ma\'lumot kiritish majburiy',
            'content.required' => 'Maqola kiritish majburiy',
        ];
    }

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
            'title' => 'required|max:255',
            'short_content' => 'required',
            'content' => 'required',
            'photo' => 'nullable|image|max:2048',
        ];
    }
}
