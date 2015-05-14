<?php namespace App\Http\Controllers;

use App\Contracts\Data\User;
use App\Contracts\Data\UsuarioWeb;
use App\Contracts\Data\Tramitacao;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class SiteController extends Controller {

    private $user;
    private $data;

    public function __construct()
	{
        $this->middleware('auth');
        Cookie::queue('system', 'site');
        $this->user = Auth::user();
    }
    
	public function getIndex()
	{
        return redirect('site/profile');
    }
    
    public function getProcessos ()
    {
        return view('site.processos');
    }

    public function getUpdates(Request $request,Tramitacao $tramitacao)
    {
        $ficha = $request->route('ficha');
        $in    = $request->route('inc');  
        $tramitacoes =  $tramitacao->tramitacoes($ficha,$in)->get();
        return view('site.updates')->with('tramitacoes',$tramitacoes)->with('lr','left');
    }

    public  function getProfile()
    {
        $pessoa = $this->user->UsuarioWeb->Pessoa;
        $social = $this->user->sociais()->where('active',1)->first();
        return view('site.profile')->with('pessoa',$pessoa)->with('social',$social);
    }

    public function postContato(Request $request)
    {
        $this->data = $request->all();
        \Mail::later(5,'emails.welcome', $this->data, function($message)
        {
            $message->to($this->data['email'],$this->data['name'])->subject($this->data['subject']);
        });
    }

}
