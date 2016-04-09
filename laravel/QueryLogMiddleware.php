<?php

class QueryLogMiddleware
{
    public function handle($request, Closure $next)
    {
        DB::enableQueryLog();
        return $next($request);
    }

    public function terminate($request, $response)
    {
        // Store or dump the log data...
        // DB::getQueryLog();
    }
}
