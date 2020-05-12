<?php

namespace App\Http\Requests\Health;

use Illuminate\Foundation\Http\FormRequest;

class HospitalRequest extends FormRequest
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
            'position' => "required|numeric",
            'working' => "required|numeric",
            'bed' => "required|numeric",
            'maternity' => "required|in:छ,छैन",
            'lab' => "required|in:छ,छैन",
            'clinic' => "required|in:छ,छैन",
            'radiography' => "required|in:छ,छैन",
            'family_planning' => "required|in:छ,छैन",
            'vaccination' => "required|in:छ,छैन",
            'motherhood' => "required|in:छ,छैन",
            'nutrition' => "required|in:छ,छैन",
            'blood' => "required|in:छ,छैन",
            'pharmacy' => "required|in:छ,छैन",
            'optometry' => "required|in:छ,छैन",
            'health_education' => "required|in:छ,छैन",
            'consultation' => "required|in:छ,छैन",
            'specialist' => "required|numeric",
            'physician' => "required|numeric",
            'assistant' => "required|numeric",
            'nurse' => "required|numeric",
            'worker' => "required|numeric",
            'midwifery' => "required|numeric",
            'technician' => "required|numeric"
        ];
    }
}
