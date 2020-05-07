<?php

namespace App\Http\Requests\Economy;

use Illuminate\Foundation\Http\FormRequest;

class OccupationRequest extends FormRequest
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
            'agriculture' => "required|numeric",
            'job' => "required|numeric",
            'business' => "required|numeric",
            'labor' => "required|numeric",
            'agency' => "required|numeric",
            'foreign' => "required|numeric",
            'student' => "required|numeric",
            'housewives' => "required|numeric",
            'unemployed' => "required|numeric",
            'early' => "required|numeric",
            'others' => "required|numeric",
            'not_included' => "required|numeric",
        ];
    }
}
