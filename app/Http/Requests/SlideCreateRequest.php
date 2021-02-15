<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideCreateRequest extends FormRequest
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
            'first_photo' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان اسلاید را مشخص کنید',
            'description.required' => 'لطفا توضیحات اسلاید را مشخص کنید',
            'first_photo.required' => 'لطفا تصویر اسلاید را مشخص کنید',
            'status.required' => 'وضعیت اسلاید نامشخص است',
        ];
    }
}
