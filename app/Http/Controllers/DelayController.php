<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

class DelayController extends Controller
{
    public function __invoke($millis, $url)
    {
        $millis = max(0, min(300000, $millis));
        $micros = 1000 * $millis;
        usleep($micros);

        return Redirect::to($url);
    }
}