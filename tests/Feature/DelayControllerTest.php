<?php

namespace Tests\Feature;

use Tests\TestCase;

class DelayControllerTest extends TestCase
{
    /**
     * /url/{millis}/{data}
     *
     * @return void
     */
    public function testDataGet()
    {
        $response = $this->get('/data/100/testing');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $response->assertHeader('Slowly-Millis', 100);

        $this->assertEquals('testing',$response->baseResponse->content());
    }

    /**
     * /url/{millis}/{data}
     *
     * @return void
     */
    public function testDataPost()
    {
        $response = $this->call('POST', '/data/100', [], [], [], [], 'testing');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $response->assertHeader('Slowly-Millis', 100);

        $this->assertEquals('testing',$response->baseResponse->content());
    }
}
