<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerEditRequest extends FormRequest
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
            'companyEmail' => 'required|email',
            'companyTitle' => 'required',
            'companyAgentName' => 'required',
            'companyAgentRole' => 'required',
            'companyAgentEmail' => 'required|email',
            'companyAgentComment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'companyEmail.required' => 'لطفا ایمیل شرکت را وارد کنید',
            'companyEmail.email' => 'ایمیل شرکت معتبر نیست',
            'companyTitle.required' => 'لطفا عنوان (نام) شرکت را وارد کنید',
            'companyAgentName.required' => 'لطفا نام نماینده شرکت را وارد کنید',
            'companyAgentRole.required' => 'لطفا نقش نماینده شرکت را وارد کنید',
            'companyAgentEmail.required' => 'لطفا ایمیل نماینده شرکت را وارد کنید',
            'companyAgentEmail.email' => 'ایمیل نماینده شرکت معتبر نیست',
            'companyAgentComment.required' => 'لطفا توضیحات نماینده شرکت را وارد کنید',
        ];
    }
}
