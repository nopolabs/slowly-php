<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class DelayedCallback implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $method;
    private $url;
    private $data;

    public function __construct(string $method, string $url, string $data = null)
    {
        $this->method = $method;
        $this->url = $url;
        $this->data = $data;
    }

    public function handle()
    {
        $client = new Client();

        Log::info("DelayedCallback {$this->method} {$this->url}");
        if ($this->method === 'get') {
            $response = $client->request('GET', $this->url);
            Log::info("status code: {$response->getStatusCode()}");
        } elseif ($this->method === 'post') {
            $response = $client->request('POST', '$this->url', ['body' => $this->data]);
            Log::info("status code: {$response->getStatusCode()}");
        } else {
            Log::warning("method not supported: {$this->method}");
        }
    }
}
