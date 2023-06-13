<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'mobile' => ['required' , 'numeric' , Rule::unique('customers' , 'mobile')],
            'source' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
    public function messages(): array
    {
        return [
            'name.required' => __('validation.required' , ['attribute' => 'الاسم']),
            'mobile.required' => __('validation.required' , ['attribute' => 'الموبيل']),
            'source.required' => __('validation.required' , ['attribute' => 'سبب الدعوة']),
            'mobile.unique' => __('validation.unique', ['attribute' => 'الموبيل']),
            'mobile.numeric' => __('validation.numeric' , ['attribute' => 'الموبيل'])
        ];
    }
}
