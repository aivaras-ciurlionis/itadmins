<?php

namespace App\Http\Middleware;

use Log;
use App\User;
use App\Role;
use Closure;

class CustomerMidleware
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
        $role = $request->user()->role;
        Log::info('Role: '.$role->name);        
        if ($role->name !== 'Customer'){
            return redirect()->guest('/');           
        }
                
        return $next($request);
    }
}
