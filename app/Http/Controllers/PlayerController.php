<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\StreamedResponse;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Return all players and their gameplay
     *
     * @return json
     */
    public function index()
    {
        $handle = fopen('php://output', 'w');
        return new StreamedResponse(function () use ($handle) {
            Player::with('gameplays')->chunk(200, function ($player) use ($handle) {
                fputs($handle, json_encode($player));
            });
        }, 200, [
            [
                'X-Runtime' => microtime(true) - LUMEN_RUN,
                'X-memory-used' => memory_get_usage()
            ]
        ]);
    }

    /**
     * Return game played by a single palyer
     *
     * @return json
     */
    public function playerGames(Request $request)
    {

        $player = Player::findOrFail($request->id);
        $handle = fopen('php://output', 'w');
        return new StreamedResponse(function () use ($handle, $request) {
            Player::where('id', $request->id)->with('gameplays')->chunk(200, function ($player) use ($handle) {
                fputs($handle, json_encode($player));
            });
        }, 200, [
            'X-Runtime' => microtime(true) - LUMEN_RUN,
            'X-memory-used' => memory_get_usage()
        ]);
    }
}
