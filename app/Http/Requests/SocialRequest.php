<?php namespace App\Http\Requests;


class SocialRequest extends Request {

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'   => 'required',
            'nome' => 'required'

       ];
    }



}