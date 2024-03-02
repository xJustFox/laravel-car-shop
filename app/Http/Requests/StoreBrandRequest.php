<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'phone_num' => 'required|string|max:20',
            'car_type' => 'required|string|max:100',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 100 characters.',
            
            'phone_num.required' => 'The phone number field is required.',
            'phone_num.string' => 'The phone number must be a string.',
            'phone_num.max' => 'The phone number may not be greater than 20 characters.',
            
            'car_type.required' => 'The car type field is required.',
            'car_type.string' => 'The car type must be a string.',
            'car_type.max' => 'The car type may not be greater than 100 characters.',
        ];
    }
}
