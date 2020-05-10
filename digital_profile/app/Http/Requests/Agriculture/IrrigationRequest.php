<?php

namespace App\Http\Requests\Agriculture;

use Illuminate\Foundation\Http\FormRequest;

class IrrigationRequest extends FormRequest
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
            'name' => "required",
            'ward_no' => "required|numeric|in:1,2,3,4,5,6,7,8,9,10,11",
            'type' => "required|in:कुलो,पाईप,नहर",
            'unit' => "required",
            'quantity' => "required|numeric",
            'availability' => "required|in:वर्षभरी,मौसमी",
            'beneficial' => "required|numeric",
        ];
    }
}
