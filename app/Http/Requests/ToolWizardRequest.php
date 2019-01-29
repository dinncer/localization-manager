<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToolWizardRequest extends FormRequest
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
     * Tool wizard validation.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'oldVersion' => 'required',
            'newVersion' => 'required'
        ];
    }
}
