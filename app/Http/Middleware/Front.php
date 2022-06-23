<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Front
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(getCustSession() == null)
        {
            return redirect('login')
        }
        return $next($request);
        protected $routeMiddleware = [
        

            'auth'=> \App\Http\Middleware\Authenticate::class,
            'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class, 
            'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
            'can' => \Illuminate\Auth\Middleware\Authorize::class,
            'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
            'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
            'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
            'throttle'=> \Illuminate\Routing\Middleware\ThrottleRequests::class, 
            'verified' => \Illuminate\Auth\Middleware\Ensure EmailIsVerified::class,
            'admin.login' => \App\Http\Middleware\checkLogin::class,
            'front' => \App\Http\Middleware\Front::class,
        ];
    }
}
