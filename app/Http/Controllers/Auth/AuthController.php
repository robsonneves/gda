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
use Laravel\Socialite\SocialiteManager;

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
                            'facebook',
                            'linkedin',
                            'twitter',
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

            /*
            switch($provider){

                case 'facebook': return \Socialize::with($provider)->scopes(['email','public_profile','user_friends'])->redirect();
                    break;

                default:

            }
            */
            return \Socialize::with($provider)->redirect();

        }else{

            return redirect()->back()->with('error',$provider. ' ainda não foi associada o sistema DESCULPE :(' );
        }

    }

    public function getCallbacklinkedin()
    {
        $profile = \Socialize::with('linkedin')->user();
        $profile->link      = 'https://www.linkedin.com/profile/view?id='.$profile->id;
        $profile->provider  = 'linkedin';
        return $this->saveSocial($profile);
    }

    public function getCallbacktwitter()
    {
        $profile = \Socialize::with('twitter')->user();
        $profile->link      = 'https://twitter.com/'.$profile->nickname;
        $profile->provider  = 'twitter';
        return $this->saveSocial($profile);
    }


    public function getCallbackfacebook()
    {
        $profile = \Socialize::with('facebook')->user();
        $profile->link      = $profile->user['link'];
        $profile->provider  = 'facebook';
        return $this->saveSocial($profile);
    }

    private function saveSocial($profile)
    {
         $user = Auth::user();
         $social = new \App\Data\Social();

         $sociais  = $social->whereUserId($user->id)->count();
         $social   = $social->whereProvider($profile->provider)->whereId($profile->id)->first();

            if(!$social)
            {
                $social = new \App\Data\Social();
                $social->id = $profile->id;
                $social->name = $profile->name;
                $social->email = $profile->email;
                $social->avatar = $profile->avatar;
                $social->link = $profile->link;
                $social->user_id = $user->id;
                $social->provider = $profile->provider;
                ($sociais > 0) ?  $social->active = false :  $social->active  = true;
                $social->save();
            }
            else{
                return redirect()->back()->with('error','Rede social, já foi cadastra :(' );
            }

        return redirect('site/profile')->with('success','Sua rede social foi adiconada :)' );

    }

}