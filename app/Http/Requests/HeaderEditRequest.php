<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderEditRequest extends FormRequest
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
            'email' => 'required',
            'telephoneNumber' => 'required',
            'title' => 'required',
            'address' => 'required',
            'description' => 'required',
            'workTime' => 'required',
            'telegram' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'لطفا ایمیل بخش هدر سایت را وارد کنید',
            'telephoneNumber.required' => 'لطفا شماره تلقن را وارد کنید',
            'title.required' => 'لطفا عنوان سلیت را وارد کنید',
            'title.address' => 'لطفا آدرس شرکت را وارد کنید',
            'description.required' => 'لطفا توضیحات بخش فوتر سایت را وارد کنید',
            'workTime.required' => 'لطفا روزها و ساعات کاری را وارد کنید',
            'telegram.required' => 'لطفا آدرس کانال تلگرام را وارد کنید',
            'instagram.required' => 'لطفا آدرس صفحه اینستاگرام را وارد کنید',
            'youtube.required' => 'لطفا آدرس کانال یوتیوب را وارد کنید',
            'twitter.required' => 'لطفا آدرس صفحه توییتر را وارد کنید',
            'facebook.required' => 'لطفا آدرس صفحه فیسبوک را وارد کنید',
        ];
    }
}
