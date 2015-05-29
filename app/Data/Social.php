<?php namespace App\Data;


use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\Social as SocialContratc;

class Social extends Eloquent implements SocialContratc{

	protected $table = 'gda_social';
    protected $primaryKey = 'id';

    protected $fillable     = ['id','name','email','avatar','link','provider','user_id'];
    protected $guarded    = array('');



    public function User (){

        return $this->hasOne(User::class, 'id','user_id');
    }

}
