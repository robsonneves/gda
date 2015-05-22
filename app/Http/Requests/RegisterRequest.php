<?php namespace App\Http\Requests;


class RegisterRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cpfcnpj'               => 'required|unique:gda_register',
            'name'                  => 'required',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'

        ];
    }



}