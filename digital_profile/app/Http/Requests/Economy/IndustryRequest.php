<?php

namespace App\Http\Requests\Economy;

use Illuminate\Foundation\Http\FormRequest;

class IndustryRequest extends FormRequest
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
            'type' => "required|in:निजी,सरकारी,अर्धसरकारी",
            'category' => "required|in:सानो,मझौला,मध्यम,ठुलो",
            'workers' => "required|numeric",
            'product' => "required",
            'economy' => "required|numeric"
        ];
    }
}
