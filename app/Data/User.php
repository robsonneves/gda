<?php namespace App\Data;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Auth\Passwords\CanResetPassword;
use App\Contracts\Data\User as UserContract;


class User extends Eloquent implements UserContract {

	use Authenticatable, CanResetPassword;
	/**
	 * The database table used by the model.
     *
	 * @var string
	 */
	protected $table = 'gda_users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [ 'remember_token'];


    public function Usuario (){

        return $this->hasOne(Usuario::class, 'identificacao');
    }

    public function UsuarioWeb ()
    {
        return $this->hasOne(UsuarioWeb::class, 'sigla');
    }

    public function Sociais()
    {
        return $this->hasMany(Social::class);
    }


}
