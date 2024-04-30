<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use  App\Models\Cli;
class CliMw
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('cliid') ) {
            return redirect()->intended('/');
        }
        $patient = Cli::find(session('cliid'));
        if($patient->pending){
          return redirect()->intended('/pending11');
        }
        return $next($request);
    }
}
