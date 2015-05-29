<?php namespace App\Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContatoController extends Controller {

	public function __construct()
	{

    }
	public function index()
	{
        return view('layouts.site.form')->nest('key', 'site.contato',[]);
	}

    public function send(Request $request)
    {
        try{

            $data = $request->all();

            \Mail::queue('emails.welcome', $data, function($message) use ($data)
            {
                $message->to($this->data['email'],$this->data['name'])->subject($this->data['message']);
            });

            return redirect()->back()->with('success',' Enviado');

        }catch (\Exception $e) {

            return redirect()->back()->with('error',' Falha ao Enviar');
        }
    }
}
