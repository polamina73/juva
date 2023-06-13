<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'customerName' =>['required'],
            'customerMobile'=>['required' , 'numeric' , Rule::unique('customers' , 'customerMobile')],
            'customerInvitedBy' =>['required']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
    public function messages()
    {
        return [
            'customerName.required' => __('validation.required' , ['attribute' => 'الاسم']),
            'customerMobile.required' => __('validation.required' , ['attribute' => 'الموبيل']),
            'customerInvitedBy.required' => __('validation.required' , ['attribute' => 'سبب الدعوة']),
            'customerMobile.unique' => __('validation.unique', ['attribute' => 'الموبيل']),
            'customerMobile.numeric' => __('validation.numeric' , ['attribute' => 'الموبيل'])
        ];
    }
}
