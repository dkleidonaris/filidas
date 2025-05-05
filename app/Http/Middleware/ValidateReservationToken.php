<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateReservationToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $reservation = $request->route('reservation');
        $token = $request->route('token') ?? $request->query('token');

        if (!$reservation || $reservation->access_token !== $token) {
            abort(403, 'Invalid access token.');
        }

        return $next($request);
    }
}
