<?php

namespace App\Http\Requests\Population;

use Illuminate\Foundation\Http\FormRequest;

class MarriageRequest extends FormRequest
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
            'unmarried' => "required|numeric",
            'single' => "required|numeric",
            'multiple' => "required|numeric",
            'remarried' => "required|numeric",
            'widowed' => "required|numeric",
            'divorced' => "required|numeric",
            'separated' => "required|numeric",
            'early' => "required|numeric",
            'not_included' => "required|numeric",
        ];
    }
}
