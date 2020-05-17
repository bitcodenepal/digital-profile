<?php

namespace App\Http\Requests\Agriculture;

use Illuminate\Foundation\Http\FormRequest;

class FruitRequest extends FormRequest
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
            'ward_no' => "required|numeric|in:1,2,3,4,5,6,7,8,9,10,11",
            'fruit_area' => "required|numeric",
            'fruit_production' => "required|numeric",
            'fruit_sold' => "required|numeric",
            'veggie_area' => "required|numeric",
            'veggie_production' => "required|numeric",
            'veggie_sold' => "required|numeric",
            'cash_area' => "required|numeric",
            'cash_production' => "required|numeric",
            'cash_sold' => "required|numeric"
        ];
    }
}
