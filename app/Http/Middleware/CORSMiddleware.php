<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Http\Response;

class CORSMiddleware implements Middleware {

    public function handle($request, Closure $next)
    {


        $response  = new Response($next($request));
        $response->header('Access-Control-Allow-Origin' , '*');
        $response->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');


        return $response;



        /*
        return ( new Response($next($request)) )

            ->header('Access-Control-Allow-Origin' , 'http://192.168.7.251/')

            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')

            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, Origin');

*/
    }

}