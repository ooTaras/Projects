<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addARequest extends FormRequest
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
            'Title'=>'required | min:5 |max:50',
            'Description'=>'required | min:5 |max:200',
            'Text'=>'required | min:5 |max:200'

        ];
    }
}
