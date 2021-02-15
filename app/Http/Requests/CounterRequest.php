<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounterRequest extends FormRequest
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
            'workExperience' => 'required',
            'satisfiedCustomers' => 'required',
            'successfulProduct' => 'required',
            'hoursOfWork' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'workExperience.required' => 'لطفا شمارنده تجربه کاری را وارد کنید',
            'satisfiedCustomers.required' => 'لطفا شمارنده مشتریان راضی را وارد کنید',
            'successfulProduct.required' => 'لطفا شمارنده محصول موفق را وارد کنید',
            'hoursOfWork.required' => 'لطفا شمارنده ساعت کاری را وارد کنید',
        ];
    }
}
