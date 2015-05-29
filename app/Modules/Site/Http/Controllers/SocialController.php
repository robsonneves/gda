<?php namespace App\Modules\Site\Http\Controllers;

use App\Contracts\Data\Social;
use App\Http\Controllers\Controller;
use App\Modules\Site\Http\Requests\SocialRequest;

class SocialController extends Controller {

    private $social;
    private $user;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function  __construct(Social $social)
    {
        $this->middleware('auth');
        $this->social = $social;
        $this->user   = \Auth::user();
    }

	public function index()
    {
        return view('layouts.site.widget')->nest('key', 'social.index', array('sociais' =>  $this->user->sociais));
    }

    public function all(){

        
        return view('layouts.site.index')->nest('key', 'social.all', array('sociais' => $this->social->all() ));
    }

	public function create()
	{
      
    }

	public function store(SocialRequest $request,Social $social)
	{
        try{
            if(!$social->create($request->all()) ){throw new \Exception("Error Processing Request"); }

            if ($request->ajax()) { return response()->json(['success'=>true],200); }
            return redirect()->route('social.create');

        }catch (\Exception $e) {

            if ($request->ajax()) { return response()->json(['fail'=>true],401); }
            return redirect()->route('social.create');
        }

    }

	public function show($id)
	{
		return $this->social->find($id);
	}

	public function edit($id)
	{
        dd( $this->social->find($id) );
	}

    public function active($id)
    {
      try {
          $social = $this->user->sociais()->whereActive(1)->first();
          $social->active = false;
          $social->save();
          $social = $this->social->find($id);
          $social->active = true;
          $social->save();
          return redirect()->back()->with('success',$social->id.' Foi Ativado');

      }catch (\Exception $e) {

         return redirect()->back()->with('error','Error ao Ativar');
      }

    }

	public function update($id)
	{

	}

    public function destroy($id)
	{
        try{
            $social = $this->social->find($id);

            if($social)
            {
                $social->delete();
                $social= $this->user->sociais()->first();
                $social->active = true;
                $social->save();
                return redirect()->back()->with('success','Excluido');
            }
       
        }catch (\Exception $e) {

            return redirect()->back()->with('error','Error ao deletar');
        }
   }

}
