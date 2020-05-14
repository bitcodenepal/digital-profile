<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForestRequest extends FormRequest
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
            'name' => "required",
            'area' => "required|numeric",
            'type'=> "required|in:सामुदायिक,साझेदारी,निजी,राष्ट्रिय र सरकारी",
            'houses' => "required|numeric",
            'wood' => "required|numeric",
            'firewood' => "required|numeric"
        ];
    }
}
