<?php

namespace App\Http\Middleware;

use Closure;

class MyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


/*    public function handle($request, Closure $next) {
        DB::beginTransaction();
        $nextRequest = $next($request); //The router will be dispatched here, but it will reach to controller's method sometimes, so that we have to use DB transaction.
        $routeName = $request->route()->getRouteName();
        if ($checkPassed) {
            DB::commit();
            return $nextRequest;
        } else {
            DB::rollback();
        }
    }*/

/*    public function handle($request, Closure $next,$a,$b,$c)
    {
        echo "$a : $b";
        dd($c);
        exit;
        if ($request->id < 5){
            return redirect('/');
        }


        return $next($request);
    }   */

    public function handle($request, Closure $next,...$ranks)
    {
        // Access the route
        $currAction = $request->route()->getAction();

        // Access the key, I wanted to access
       // $currModule = $currAction['moduleName'];


        //dd(\Route::currentRouteAction());
        //dd(\Route::getCurrentRoute()->getAction());
        //dd(\Route::currentRouteName());
        //dd($request->route()->getActionName());

        list(, $action) = explode('@', \Route::getCurrentRoute()->getActionName());
        dd($action);

        exit;
        if ($request->id < 5){
            return redirect('/');
        }


        return $next($request);
    }



}
