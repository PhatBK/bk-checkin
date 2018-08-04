<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;

class SinhVien_Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->level == 3){
                return $next($request);
            }else{
                return redirect('login');
            }
        }else{
            return redirect('login');
        }
        
    }
}
