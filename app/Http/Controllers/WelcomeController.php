<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

	public function __construct()
	{
        $this->middleware('guest');
	}

	public function index()
	{
        //return view('layouts.site.widget')->nest('key', 'uploads.index', array('files' =>  $files));
	}

    public function Contato(Request $request)
    {
        try{

            $this->data = $request->all();

            \Mail::queue('emails.welcome', $this->data, function($message)
            {
                $message->to($this->data['email'],$this->data['name'])->subject($this->data['message']);
            });

            return redirect()->back()->with('success',' Enviado');

        }catch (\Exception $e) {

            return redirect()->back()->with('error',' Falha ao Enviar');
        }

    }
}
