<?php

namespace App\Http\Requests\Infrastructure\Fuel;

use Illuminate\Foundation\Http\FormRequest;

class ElectricityRequest extends FormRequest
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
            'electricity' => "required|numeric",
            'petrol' => "required|numeric",
            'bio' => "required|numeric",
            'solar' => "required|numeric",
            'others' => "required|numeric",
        ];
    }
}
