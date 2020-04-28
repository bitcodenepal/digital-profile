<?php

namespace App\Http\Requests\Population;

use Illuminate\Foundation\Http\FormRequest;

class MotherTongueRequest extends FormRequest
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
            'nepali' => "required|numeric",
            'maithili' => "required|numeric",
            'bhojpuri' => "required|numeric",
            'tharu' => "required|numeric",
            'hindi' => "required|numeric",
            'urdu' => "required|numeric",
            'bantawa' => "required|numeric",
            'tamang' => "required|numeric",
            'jhagad' => "required|numeric",
            'others' => "required|numeric",
            'not_included' => "required|numeric",
        ];
    }
}
