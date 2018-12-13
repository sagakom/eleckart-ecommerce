<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class passwordUpdateValidationRequest extends FormRequest
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
            //

//            'old_password'=>'required|min:6',
            'new_password'=>'required|min:6',
            'retype_new_password'=>'required|min:6|same:new_password'
        ];
    }
}
