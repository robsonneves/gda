<?php namespace App\Modules\Api\Http\Controllers;

use App\Contracts\Data\Social;
use App\Contracts\Data\User;
use App\Contracts\Data\Processo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiSiteController extends Controller {

    private $cache;

	public function __construct( \Illuminate\Cache\Repository $cache)
	{
		$this->middleware('cors');
        $this->cache = $cache;
    }

    public function showListProcess(User $user)
    {
        
        if(!$this->cache->has('process'.Auth::user()->id) ){

            $processos =  Auth::user()->usuarioweb->pessoa->processos->take(20)->filter( function ($pro) {

                if(!empty($pro->numero_processo)){
                    $pro->advogado;
                    $pro->reu;
                    return true;
                }
            });
            $this->cache->put('process'.Auth::user()->id,$processos,60);
        }
        $processos = $this->cache->get('process'.Auth::user()->id);
        return $processos->values()->toJson();
    }

    public function showSocialProfile()
    {
        $social = \Auth::user()->sociais()->where('active',1)->first();
        if($social) { return $social->toJson(); }
    }

    public function showSocialRecents(Social $social,Request $request)
    {
        $qtd = $request->route('qtd');
        return $social->all()->take($qtd)->toJson();
    }

    public function ShowTramitacoes(Processo $processos, Request $request){

            $id = $request->route('id');
            $processos->find($id);

            echo $processos->tramitacoes;

    }

}
