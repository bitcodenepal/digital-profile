<?php

namespace App\Http\Requests\Hygiene;

use Illuminate\Foundation\Http\FormRequest;

class WaterRequest extends FormRequest
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
            'pipe_tap' => "required|numeric",
            'public_tap' => "required|numeric",
            'deep_boring' => "required|numeric",
            'tap' => "required|numeric",
            'closed_well' => "required|numeric",
            'open_well' => "required|numeric",
            'original' => "required|numeric",
            'river' => "required|numeric",
            'others' => "required|numeric"
        ];
    }
}
