<?php
namespace App\Http\Middleware;

use Closure;

class PreventBackHistory
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $expiresDate = gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT'; // 86400 detik = 1 hari

        return $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
                        ->header('Pragma', 'no-cache')
                        ->header('Expires', $expiresDate);
    }
}
