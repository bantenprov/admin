<?php namespace Bantenprov\Admin\Http\Middleware;

use Closure;

/**
 * The AdminMiddleware class.
 *
 * @package Bantenprov\Admin
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AdminMiddleware
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
        return $next($request);
    }
}
