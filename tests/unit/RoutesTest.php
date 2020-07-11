<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * Test that Routes are available
     * and defined.
     *
     * @return void
     */
    public function testAllRoutes()
    {
        $this->checkRoute("/games");
        $this->checkRoute("/palyers");
        $this->checkRoute("/gameplays");
        $this->checkRoute("/gameplays/2020");
    }

    public function checkRoute($route)
    {
        $this->get($route);
        $this->assertNotEquals(
            404,
            $this->response->status()
        );
    }
}
