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
       return view('auth.'.$this->cookie->get('system').'login' );
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

    public  function postResetPassword(Request $request, Pessoa $pessoa)
    {

        echo $this->mask($request->get('cpfcnpj'),'###.###.###-##');

          //$pessoa = $pessoa->where('cpf_cnpj','=',$request->get('cpfcnpj'))->first();


            /*
            try{
                if(!$pessoa ){throw new \Exception("Error Processing Request"); }

                if($pessoa->web->sigla ==$request->get('login') ){

                    echo 'email';
                    //if ($request->ajax()) { return response()->json(['success'=>true]); }
                    //return redirect()->route('social.create');
                }
                else{
                    throw new \Exception("Error Processing Request");
                }



            }catch (\Exception $e) {

                if ($request->ajax()) { return response()->json(['fail'=>true]); }
                return 'FAIl';
            }
            */
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

    private  function mask($val, $mask)
    {
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++)
        {
            if($mask[$i] == '#')
            {
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
            }
            else
            {
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }
}
