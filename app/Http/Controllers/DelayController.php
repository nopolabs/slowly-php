<?php

namespace App\Http\Controllers;

use App\Jobs\DelayedCallback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DelayController extends Controller
{
    public function urlGet($millis, $url)
    {
        $this->sleep($millis);

        return Redirect::to($url);
    }

    public function urlPost(Request $request, $millis)
    {
        $url = $request->getContent();

        $this->sleep($millis);

        return Redirect::to($url);
    }

    public function dataGet($millis, $data)
    {
        $this->sleep($millis);

        return $this->dataResponse($millis, $data);
    }

    public function dataPost(Request $request, $millis)
    {
        $data = $request->getContent();

        $this->sleep($millis);

        return $this->dataResponse($millis, $data);
    }


    public function callbackGet($seconds, $url)
    {
        $job = (new DelayedCallback('get', $url))->delay($seconds);

        $this->dispatch($job);

        return;
    }

    public function callbackPost(Request $request, $seconds, $url)
    {
        $data = $request->getContent();

        $job = (new DelayedCallback('get', $url, $data))->delay($seconds);

        $this->dispatch($job);

        return;
    }

    private function sleep($millis)
    {
        $millis = max(0, min(300000, $millis));
        $micros = 1000 * $millis;
        usleep($micros);
    }

    private function dataResponse($millis, $data)
    {
        return response($data, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
            'Slowly-Millis' => $millis,
        ]);
    }
}