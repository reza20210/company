<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutEditRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان درباره ما را وارد کنید',
            'description.required' => 'لطفا توضیحات درباره ما را مشخص کنید',
        ];
    }
}
