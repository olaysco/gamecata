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
        // $this->checkRoute("/players");
        $this->checkRoute("/gameplays");
    }

    public function checkRoute($route)
    {
        $this->get('/api' . $route);
        $this->assertNotEquals(
            404,
            $this->response->status()
        );
    }
}
