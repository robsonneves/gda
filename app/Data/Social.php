<?php namespace App\Data;


use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\Social as SocialContratc;

class Social extends Eloquent implements SocialContratc{

	protected $table = 'gda_social';
    protected $primaryKey = 'id';

    protected $guarded    = array('');

    public function User (){

        return $this->hasOne(Usuario::class, 'id_user');
    }

}
