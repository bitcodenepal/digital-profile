<?php

namespace App\Http\Requests\Agriculture;

use Illuminate\Foundation\Http\FormRequest;

class CropRequest extends FormRequest
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
            'crop_area' => "required|numeric",
            'crop_production' => "required|numeric",
            'crop_sold' => "required|numeric",
            'pulse_area' => "required|numeric",
            'pulse_production' => "required|numeric",
            'pulse_sold' => "required|numeric",
            'oil_area' => "required|numeric",
            'oil_production' => "required|numeric",
            'oil_sold' => "required|numeric"
        ];
    }
}
