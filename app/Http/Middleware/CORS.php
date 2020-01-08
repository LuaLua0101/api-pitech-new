<?php
# File: app\Http\Middleware\CORS.php
# Create file with below code in above location. And at the end of the file there are other instructions also.
# Please check.
namespace App\Http\Middleware;

use Closure;

class CORS
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
        if ($request->isMethod('OPTIONS')) {
            $response = Response::make();
        } else {
            $response = $next($request);
        }
        return $response
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');
    }
}
# File::  app\Http\Kernel.php
# Add following line in `protected $middleware` Array.
# \App\Http\Middleware\CORS::class
# And following in `protected $routeMiddleware` Array
# 'cors' => \App\Http\Middleware\CORS::class
