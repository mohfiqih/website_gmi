<?php

namespace App\Http\Middleware;

use Closure;

class RevalidateHtml
{
    /**
     * Ask browsers and intermediary caches to revalidate rendered pages on each visit.
     * Static files remain cacheable because their URLs include a deployed-file version.
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $contentType = $response->headers->get('Content-Type', '');

        if (stripos($contentType, 'text/html') !== false) {
            $response->headers->set('Cache-Control', 'no-cache, must-revalidate');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');
        }

        return $response;
    }
}
