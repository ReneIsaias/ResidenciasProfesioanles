<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CovenantsCreatedRequest extends FormRequest
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
            'convenant' => 'required|min:10|max:50|unique:covenants,convenant',
            'descriptionConvenant' => 'min:10|max:100',
            'statusConvenant' => '',  
        ];
    }
}
