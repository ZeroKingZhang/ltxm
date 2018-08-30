<?php

namespace App\Http\Middleware;

use Closure;

class HomeLoginMiddleware
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
         if($request->session()->has('homeFlag')){
             return $next($request);//通过  执行下一次请求
        }
         //跳转到登录页面
        return redirect('/login'); 
    }
}
