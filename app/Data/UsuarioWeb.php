<?php namespace App\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\UsuarioWeb as UsuarioWebContratc;


class UsuarioWeb extends Eloquent implements UsuarioWebContratc{

	protected $table      = 'cad_usuario_web';
    protected $primaryKey = 'sigla';

    public $timestamps    = false;

    protected $guarded    = array('sigla');

    public function User (){

        return $this->hasOne(User::class, 'id');
    }

    public function Pessoa ()
    {
        return $this->hasOne(Pessoa::class,'codigo','processos_pessoa');
    }
}
