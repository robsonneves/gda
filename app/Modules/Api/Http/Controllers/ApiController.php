<?php namespace App\Modules\Api\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller {

	public function __construct()
	{
		//$this->middleware('guest');
    }

    public function showProfile(Request $request)
    {
        return $request->route('id');
    }

}
