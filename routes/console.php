<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Artisan::command('user:expiration', function () {
//     $this->comment(Expiration::user());
// })->purpose('Expire 0 to 1')->everyMinute();

Schedule::command('user:expiration')->everyMinute();

Schedule::command('database:backup')->daily();

