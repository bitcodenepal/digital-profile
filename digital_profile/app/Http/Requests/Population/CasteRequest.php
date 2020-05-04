<?php

namespace App\Http\Requests\Population;

use Illuminate\Foundation\Http\FormRequest;

class CasteRequest extends FormRequest
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
            'hill_brahmin' => "required|numeric",
            'terai_brahmin' => "required|numeric",
            'hill_tribe' => "required|numeric",
            'terai_tribe' => "required|numeric",
            'hill_low' => "required|numeric",
            'terai_low' => "required|numeric",
            'muslim' => "required|numeric",
            'hill_others' => "required|numeric",
            'terai_others' => "required|numeric",
            'not_included' => "required|numeric"
        ];
    }
}
