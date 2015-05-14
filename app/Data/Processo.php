<?php namespace App\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\Processo as ProcessoContratc;


class Processo extends Eloquent implements ProcessoContratc
{

    protected $table = 'cad_processo';
    protected $primaryKey = 'ficha';

    public $timestamps = false;

    protected $guarded = array('ficha');

    public function Reu()
    {
        return $this->hasOne(Pessoa::class, 'codigo', 'primeiro_reu');
    }

    public function Advogado()
    {
        return $this->hasOne(Pessoa::class, 'codigo', 'primeiro_advogado');
    }

    public function Tramitacoes ()
    {
        return $this->hasMany(Tramitacao::class,'ficha');
    }


}