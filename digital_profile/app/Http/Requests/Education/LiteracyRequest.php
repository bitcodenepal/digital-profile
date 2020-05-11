<?php

namespace App\Http\Requests\Education;

use Illuminate\Foundation\Http\FormRequest;

class LiteracyRequest extends FormRequest
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
            'literate_male' => "required|numeric",
            'literate_female' => "required|numeric",
            'illiterate_male' => "required|numeric",
            'illiterate_female' => "required|numeric",
            'minor_male' => "required|numeric",
            'minor_female' => "required|numeric",
            'not_included' => "required|numeric"
        ];
    }
}
