<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideEditRequest extends FormRequest
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
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان اسلاید را مشخص کنید',
            'description.required' => 'لطفا توضیحات اسلاید را مشخص کنید',
            'status.required' => 'وضعیت اسلاید نامشخص است',
        ];
    }
}
