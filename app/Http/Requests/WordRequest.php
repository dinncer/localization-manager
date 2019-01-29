<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordRequest extends FormRequest
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
     * Project validation.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'version' => 'required'
        ];
    }
}
