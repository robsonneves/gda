<?php namespace App\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Contracts\Data\Tramitacao as TramitacaoContratc;


class Tramitacao extends Eloquent implements TramitacaoContratc
{

    protected $table = 'cad_tramitacao';
    protected $primaryKey = 'ficha';

    public $timestamps = false;

    protected $guarded = array('ficha');

    public function scopeTramitacoes($query,$ficha,$inc)
    {
        return $query->whereFicha($ficha)->whereIncidente($inc)->take(10);
    }

}