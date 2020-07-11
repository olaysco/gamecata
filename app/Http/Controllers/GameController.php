<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class GameController extends Controller
{
    /**
     * Return all games
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $allGames =  app('db')->select("SELECT * FROM games");
        return new Response($allGames, 200, [
            'X-Runtime' => microtime(true) - LUMEN_RUN,
            'X-memory-used' => memory_get_usage()
        ]);
    }
}
