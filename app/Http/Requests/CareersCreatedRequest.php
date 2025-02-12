<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareersCreatedRequest extends FormRequest
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
            'keyCareer' => 'required|min:3|max:10|unique:careers,keyCareer',
            'careerName' => 'required|min:5|max:100|unique:careers,careerName',
            'careerStatus' => 'requiered|max:2',    
        ];
    }
}
