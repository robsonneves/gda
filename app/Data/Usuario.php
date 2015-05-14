<?php namespace App\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\Usuario as UsuarioContratc;


class Usuario extends Eloquent implements UsuarioContratc {

	protected $table      = 'cad_usuario';
    protected $primaryKey = 'identificacao';

    public $timestamps    = false;

    protected $guarded    = array('identificacao');

    public function User (){

        return $this->hasOne(User::class, 'id');
    }
}
