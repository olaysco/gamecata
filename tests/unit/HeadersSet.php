<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class HeadersSet extends TestCase
{
    /**
     * Test xrun time is set
     * players are returned
     *
     * @return void
     */
    public function testXRuntime()
    {
        $this->json('GET', '/api/gameplays/top')->seeHeader(
            'X-Runtime'
        );
    }

    /**
     * Test that xmemory isset
     *
     * @return void
     */
    public function testXMemory()
    {
        $this->json('GET', '/api/gameplays/top')->seeHeader(
            'X-Runtime'
        );
    }
}
