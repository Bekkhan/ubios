<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FeedbackRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'email|string',
            'phone' => 'required|string',
            'source_point' => 'required',
            'destination' => 'required',
            'package_name' => 'required',
            'volume' => 'required',
            'contains' => 'required',
            'date' => 'required',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['success'=> false, 'errors' => $validator->errors()], 422));
    }
}
