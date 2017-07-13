<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

class DelayController extends Controller
{
    public function url($millis, $url)
    {
        $this->sleep($millis);

        return Redirect::to($url);
    }

    public function data($millis, $data)
    {
        $this->sleep($millis);

        return $data;
    }

    private function sleep($millis)
    {
        $millis = max(0, min(300000, $millis));
        $micros = 1000 * $millis;
        usleep($micros);
    }
}