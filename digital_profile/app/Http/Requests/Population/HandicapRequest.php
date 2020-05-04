<?php

namespace App\Http\Requests\Population;

use Illuminate\Foundation\Http\FormRequest;

class HandicapRequest extends FormRequest
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
            'physical' => "required|numeric",
            'mental' => "required|numeric",
            'blind' => "required|numeric",
            'deaf' => "required|numeric",
            'dumb' => "required|numeric",
            'psycho' => "required|numeric",
            'healthy' => "required|numeric",
            'not_included' => "required|numeric",
        ];
    }
}
