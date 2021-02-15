<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutCreateRequest extends FormRequest
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
            'first_photo_id' => 'required',
            'second_photo_id' => 'required',
            'third_photo_id' => 'required',
            'forth_photo_id' => 'required',
            'fifth_photo_id' => 'required',
            'sixth_photo_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان درباره ما را وارد کنید',
            'description.required' => 'لطفا توضیحات درباره ما را مشخص کنید',
            'first_photo_id.required' => 'لطفا تصویر اول درباره ما را مشخص کنید',
            'second_photo_id.required' => 'لطفا تصویر دوم درباره ما را مشخص کنید',
            'third_photo_id.required' => 'لطفا تصویر سوم درباره ما را مشخص کنید',
            'forth_photo_id.required' => 'لطفا تصویر چهارم درباره ما را مشخص کنید',
            'fifth_photo_id.required' => 'لطفا تصویر پنجم درباره ما را مشخص کنید',
            'sixth_photo_id.required' => 'لطفا تصویر ششم درباره ما را مشخص کنید',
        ];
    }
}
