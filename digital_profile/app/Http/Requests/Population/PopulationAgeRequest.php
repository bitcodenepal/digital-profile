<?php

namespace App\Http\Requests\Population;

use Illuminate\Foundation\Http\FormRequest;

class PopulationAgeRequest extends FormRequest
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
            'male_five' => "required|numeric",
            'female_five' => "required|numeric",
            'male_six' => "required|numeric",
            'female_six' => "required|numeric",
            'male_fifteen' => "required|numeric",
            'female_fifteen' => "required|numeric",
            'male_nineteen' => "required|numeric",
            'female_nineteen' => "required|numeric",
            'male_twenty_five' => "required|numeric",
            'female_twenty_five' => "required|numeric",
            'male_fifty' => "required|numeric",
            'female_fifty' => "required|numeric",
            'male_sixty' => "required|numeric",
            'female_sixty' => "required|numeric",
            'male_seventy' => "required|numeric",
            'female_seventy' => "required|numeric",
        ];
    }
}
