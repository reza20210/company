<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'questionTitle' => 'required',
            'answer' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'questionTitle.required' => 'لطفا عنوان سوال را وارد کنید',
            'answer.required' => 'لطفا پاسخ سوال را وارد کنید',
        ];
    }
}
