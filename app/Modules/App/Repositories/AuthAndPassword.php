<?php namespace App\Modules\App\Repositories;

use App\Contracts\Data\Pessoa;
use App\Contracts\Data\Register;
use App\Contracts\Data\User;
use App\Contracts\Data\Usuario;
use App\Events\NewRegister;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;


trait AuthAndPassword {

    protected $auth;
    protected $cookie;
    protected $web;
    protected $app;

    public function getLogin()
    {
       return view('auth'.$this->cookie->get('system').'login' );
    }

    public function getLogout()
    {
        $this->auth->logout();
        return redirect($this->cookie->get('system'));
    }

    public  function getResetPassword()
    {
        return view('auth.password');
    }

    public  function postResetPassword(Request $request, User $user)
    {
       try{
            $user = $user->find($request->input('login'));

            if($user->email == $request->input('email') )
            {
                $this->sendPassword($user);
                return redirect()->back()->with('success','em alguns minutos receberá um e-mail :)');
            }else
            {
                throw new \Exception("Error Processing Request");
            }

       }catch (\Exception $e) {

            return redirect('contato')->with('error','Dados invalidos, não foi posivel resetar sua senha, entre em contato ;(');
       }
    }

    public  function getRegister()
    {
        return view('layouts.site.form')->nest('key', 'auth.register', []);
    }

    public  function postRegister(RegisterRequest $request, Register $register)
    {
        try{

            $register = $register->create( $request->all());
            \Event::fire(new NewRegister($register) );

            return redirect()->back()->with('success',' Gravado, em alguns minutos recebera um e-mail');

        }catch (\Exception $e) {

            return redirect()->back()->with('error',' Ao registrar, entre em contato 3072-7500');
        }
    }

    public function postLogin(User $user, Request $request)
    {
        try{

            if ($this->cookie->get('system') == 'site') {
                $usuario = $this->web->where('sigla', '=', $request->input('sigla'))->where('senha', '=', $request->input('senha'))->first();
            }

            $user = $user->find($usuario->sigla);

            if ($user) {
                $this->auth->login($user, 1);
                return redirect($this->cookie->get('system') . '/profile');
            }else{

                throw new \Exception("Error Processing Request");

            }

        }catch (\Exception $e) {

            if ($request->ajax()) { return response()->json(['error'=>'Usuario/Senha invalido'],401); }
            return redirect()->back()->with('error','Usuario/Senha invalido');
        }

    }

    private function sendPassword(User $user)
    {
        \Mail::queue('emails.password', ['key' => ''], function ($message) use ($user) {
            $message->to($user->email, $user->id)->subject('Subject');
        });
    }
}
