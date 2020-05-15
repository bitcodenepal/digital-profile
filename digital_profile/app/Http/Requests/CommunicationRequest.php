<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunicationRequest extends FormRequest
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
            'radio' => "required|numeric",
            'tv' => "required|numeric",
            'mobile' => "required|numeric",
            'computer' => "required|numeric",
            'internet' => "required|numeric",
            'fridge' => "required|numeric",
            'bike' => "required|numeric",
            'car' => "required|numeric",
            'bus' => "required|numeric",
            'none' => "required|numeric",
        ];
    }
}
