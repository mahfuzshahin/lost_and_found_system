<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\InstallHelper;
use Illuminate\Support\Facades\File;

class CheckInstallation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // dd(File::exists(storage_path('installed.lock')));
        if (!File::exists(storage_path('installed.lock')) && !$request->is('install*')) {
            return redirect()->route('install.form');
        }

        // Already installed
        if (File::exists(storage_path('installed.lock')) && $request->is('install*')) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
