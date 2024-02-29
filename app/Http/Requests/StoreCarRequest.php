<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'model' => 'required|max:100',
            'year' => 'nullable',
            'color' => 'max:50|nullable',
            'kilometers' => 'nullable',
            'price' => 'nullable',
            'transmission' => 'max:20|nullable',
            'fuel_type' => 'max:20|nullable',
            'engine_size' => 'max:20|nullable',
            'description' => 'nullable',
        ];
    }

    public function messages(){
        return [
            'model.required' => 'The model is required',
            'model.max' => 'The model text can be max 100 characters',
            'color.max' => 'The color text can be max 100 characters',
            'kilometers.decimal' => 'Invalid kilometers',
            'price.decimal' => 'Invalid price',
            'transmission.max' => 'The transmission text can be max 20 characters',
            'fuel_type.max' => 'The fuel type text can be max 20 characters',
            'engine_size.max' => 'The engine size text can be max 20 characters',
        ];
    }
}
