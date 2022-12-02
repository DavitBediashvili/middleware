<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Mid
{
   
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('name') !== 'my-super-middleware') {
            return redirect('/error');
        }

        return $next($request);
    }

}
