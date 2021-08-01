<?php

namespace App\Http\Requests\Combination;

use Illuminate\Foundation\Http\FormRequest;

class CombinationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'string' => 'required',
            'number' => 'required',
        ];
    }
}
