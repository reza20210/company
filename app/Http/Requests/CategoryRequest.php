<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'title' => 'required',
            'slug' => Rule::unique('categories')->ignore(request()->category),
            'description' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان دسته بندی را وارد کنید',
            'slug.unique' => 'این نام مستعار قبلا ثبت شده است',
            'description.required' => 'لطفا توضیحات دسته بندی را وارد کنید',
            'meta_description.required' => 'لطفا متا توضیحات این دسته بندی را مشخص کنید',
            'meta_keywords.required' => 'لطفا متا لغات کلیدی این دسته بندی را مشخص کنید',
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->input('slug')) {
            $this->merge(['slug' => make_slug($this->input('slug'))]);
        } else {
            $this->merge(['slug' => make_slug($this->input('title'))]);
        }
    }
}
