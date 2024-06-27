<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Puklipo\Vapor\Middleware\GzipResponse;
use Illuminate\Http\Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     //
    // }

    public function boot(): void
{
    GzipResponse::encodeWhen(function (Request $request, mixed $response): bool {
        return in_array('gzip', $request->getEncodings())
            && $request->method() === 'GET'
            && function_exists('gzencode')
            && ! $response->headers->contains('Content-Encoding', 'gzip')
            && ! $response instanceof BinaryFileResponse;
    });
}
}
