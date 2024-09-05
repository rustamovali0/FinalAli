<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SettingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = Setting::pluck('data','name')->toArray();
        $categories = Category::where('status','1')->get();

        view()->share(['setting' => $settings,'categories'=>$categories]);
        return $next($request);
    }
}
