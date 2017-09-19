<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class requestUser extends FormRequest
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
        $user = Auth::user();
//        $validateEmail = 'required|email|max:25|unique:users,email';
//        if($user)
//            $validateEmail .= ','.$user->id;
        return [
            'email' => 'required|email|max:25|unique:users,email,'.(isset($user)?$user->id:''),

        ];
    }
}
