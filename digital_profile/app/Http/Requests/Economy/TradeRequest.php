<?php

namespace App\Http\Requests\Economy;

use Illuminate\Foundation\Http\FormRequest;

class TradeRequest extends FormRequest
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
            'quantity' => "required|in:मेट्रिक टन,क्विन्टल,किलोग्राम,लिटर,क्यारेट",
            'import' => "required|numeric",
            'export' => "required|numeric"
        ];
    }
}
