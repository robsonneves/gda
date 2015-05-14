<?php namespace App\Modules\Site\Http\Controllers;

use App\Contracts\Data\Social;
use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;


class SocialController extends Controller {

    private $social;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function  __construct(Social $social)
    {
        $this->middleware('auth');
        $this->social = $social;
    }

	public function index()
    {
        return \view('social.index')->with('sociais',\Auth::user()->sociais);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
      
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SocialRequest $request,Social $social)
	{
        try{
            if(!$social->create($request->all()) ){throw new \Exception("Error Processing Request"); }

            if ($request->ajax()) { return response()->json(['success'=>true]); }
            return redirect()->route('social.create');

        }catch (\Exception $e) {

            if ($request->ajax()) { return response()->json(['fail'=>true]); }
            return redirect()->route('social.create');
        }

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->social->find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        dd( $this->social->find($id) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update(SocialRequest $request, $id)
	{
        $request->all();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

    public function destroy($id)
	{
        $social = $this->social->find($id);
        $social->delete();
	}

}
