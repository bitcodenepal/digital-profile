<?php

namespace App\Http\Requests\Tourism;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
            'name' => "required",
            'ward_no' => "required|numeric|in:1,2,3,4,5,6,7,8,9,10,11",
            'availability' => "required|in:पुगेको छ,पुगेको छैन",
            'distance' => "required|numeric",
            'allocation' => "required|in:सामुदायिक,सार्वजनिक",
            'importance' => "required|in:धार्मिक,ऐतिहासिक,पर्यटकीय",
            'economy' => "required|numeric"
        ];
    }
}
