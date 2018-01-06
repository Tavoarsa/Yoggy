<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;




class Admin
{
    protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

     //se valida si el usurio es administrador.
    public function handle($request, Closure $next)
    {

        if($this->auth->user()->roll !=0)
        { 
            $message = 'No tienes priveligios de administrador!';           
            return redirect()->to('/')->with('message', $message);;
        }  
        
        return $next($request);
    }
}
