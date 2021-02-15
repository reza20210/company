<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProjectCreateRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        if ($this->input('slug')) {
            $this->merge(['slug' => make_slug($this->input('slug'))]);
        } else {
            $this->merge(['slug' => make_slug($this->input('title'))]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:10',
            'slug' => Rule::unique('projects')->ignore(request()->project),
            'description' => 'required',
            'first_photo' => 'required',
            'category' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان پروژه را وارد کنید',
            'title.min' => 'عنوان پروژه شما باید بیش از 10 کاراکتر باشد',
            'slug.unique' => 'این نام مستعار قبلا ثبت شده است',
            'description.required' => 'لطفا توضیحات پروژه را وارد کنید',
            'first_photo.required' => 'لطفا تصویر اصلی پروژه را مشخص کنید',
            'category.required' => 'لطفا دسته بندی این پروژه را مشخص کنید',
            'meta_description.required' => 'لطفا متا توضیحات این پروژه را مشخص کنید',
            'meta_keywords.required' => 'لطفا متا لغات کلیدی این پروژه را مشخص کنید',
            'status.required' => 'وضعیت پروژه نامشخص است',
        ];
    }
}
