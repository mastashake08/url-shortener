<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Monolog\Processor\WebProcessor;
use Carbon\Carbon;
class WebProcessorLogging
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
      Log::getMonolog()->pushProcessor(new WebProcessor());
      Log::info('REQUEST',['time'=>Carbon::now()->toRfc2822String()]);
        return $next($request);
    }
}
