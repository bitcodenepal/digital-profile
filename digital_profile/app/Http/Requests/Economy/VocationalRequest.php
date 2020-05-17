<?php

namespace App\Http\Requests\Economy;

use Illuminate\Foundation\Http\FormRequest;

class VocationalRequest extends FormRequest
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
            'tailor' => "required|numeric",
            'communication' => "required|numeric",
            'construction' => "required|numeric",
            'mechanic' => "required|numeric",
            'agriculture' => "required|numeric",
            'health' => "required|numeric",
            'veterinary' => "required|numeric",
            'tourism' => "required|numeric",
            'industry' => "required|numeric",
            'others' => "required|numeric",
            'not_included' => "required|numeric",
        ];
    }
}
