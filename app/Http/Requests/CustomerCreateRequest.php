<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreateRequest extends FormRequest
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
            'companyLogoId' => 'required',
            'companyAgentName' => 'required',
            'companyAgentRole' => 'required',
            'companyAgentEmail' => 'required|email',
            'companyAgentPhotoId' => 'required',
            'companyAgentComment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'companyEmail.required' => 'لطفا ایمیل شرکت را وارد کنید',
            'companyEmail.email' => 'ایمیل شرکت معتبر نیست',
            'companyTitle.required' => 'لطفا عنوان (نام) شرکت را وارد کنید',
            'companyLogoId.required' => 'لطفا لوگوی شرکت را وارد کنید',
            'companyAgentName.required' => 'لطفا نام نماینده شرکت را وارد کنید',
            'companyAgentRole.required' => 'لطفا نقش نماینده شرکت را وارد کنید',
            'companyAgentEmail.required' => 'لطفا ایمیل نماینده شرکت را وارد کنید',
            'companyAgentEmail.email' => 'ایمیل نماینده شرکت معتبر نیست',
            'companyAgentPhotoId.required' => 'لطفا عکس نماینده شرکت را وارد کنید',
            'companyAgentComment.required' => 'لطفا توضیحات نماینده شرکت را وارد کنید',
        ];
    }
}
