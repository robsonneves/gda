<?php namespace App\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\Pessoa as PessoaContratc;


class Pessoa extends Eloquent implements PessoaContratc{

	protected $table      =  'cad_pessoa';
    protected $primaryKey =  'codigo';
    protected $guarded    =  array('codigo');

    public    $timestamps = false;

    public function getNomeAttribute()
    {
        return   str_limit($this->attributes['nome'], $limit = 21, $end = '...');
    }

    public function Processos ()
    {
        return $this->hasMany(Processo::class,'primeiro_autor');
    }

    public  function Web()
    {
        return $this->hasOne(UsuarioWeb::class,'processos_pessoa','codigo');
    }

}

