<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()
            && Auth::user()->email == "cedfer77@hotmail.fr") {
            return $next($request);
        }
        return redirect('home')->with('success', "Accès refusé");
    }
}