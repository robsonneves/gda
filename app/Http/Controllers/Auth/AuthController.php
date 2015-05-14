<?php namespace App\Http\Controllers\Auth;

use App\Contracts\Data\Social as Social;
use App\Contracts\Data\User;
use App\Contracts\Data\Usuario;
use App\Data\UsuarioWeb;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Modules\App\Repositories\AuthAndPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller {

    /*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

    use AuthAndPassword;

    protected $providers = [
                            'github',
                            'facebook',
                            'google',
    ];

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth,Cookie $cookie,UsuarioWeb $web,Usuario $app)
	{
		$this->auth     = $auth;
        $this->cookie   = $cookie;
        $this->web      = $web;
        $this->app      = $app;
        //$this->registrar = $registrar;
		//$this->middleware('guest', ['except' => 'getLogout']);
	}

    public function getRedirect($provider)
    {
        if (in_array($provider, $this->providers)){
            return \Socialize::with($provider)->scopes(['email','public_profile','user_friends'])->redirect();
            //return \Socialize::with($provider)->redirect();
        }else{

            return "Provedor no autorizado";
        }

    }

    public function getCallback(Social $social)
    {

        $user = Auth::user();
        $profile = \Socialize::with('facebook')->user();

        $social = $social->where('provider','facebook')->where('id',$profile->id)->where('user_id',$user->id)->first();

            if(!$social) {

                $social = new \App\Data\Social();
                $social->id = intval($profile->id);
                $social->nome = $profile->name;
                $social->email = $profile->email;
                $social->avatar = $profile->avatar;
                $social->link = $profile->user['link'];
                $social->locale = $profile->user['locale'];
                $social->user_id = $user->id;
                $social->provider = 'facebook';
                $social->save();

            }
        return redirect('site/profile');


    }

}