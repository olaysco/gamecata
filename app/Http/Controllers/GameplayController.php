<?php

namespace App\Http\Controllers;

use App\Gameplay;
use App\Player;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GameplayController extends Controller
{
    /**
     * Return all gameplays
     *
     * @return Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        if ($startDate == null && $endDate == null) {
            return new Response(Gameplay::with('player')
                ->orderBy('date_played')->get()
                ->groupBy('date_played'), 200, [
                'X-Runtime' => microtime(true) - LUMEN_RUN,
                'X-memory-used' => memory_get_usage()
            ]);
        } else {
            return $this->filterByDate($startDate, $endDate);
        }
    }

    /**
     * Filter all gameplays by date
     * Expected date format is Y-m-d
     *
     * @return Illuminate\Http\Response;
     */
    public function filterByDate($startDate, $endDate)
    {
        try {

            $startDate = Carbon::createFromDate($startDate);
            $endDate = $endDate ? Carbon::now() : Carbon::createFromDate($endDate);

            if ($startDate->greaterThan($endDate)) {
                return new Response(["error" => "invalid date format, ensure start date is before the end date"], 400, [
                    'X-Runtime' => microtime(true) - LUMEN_RUN,
                    'X-memory-used' => memory_get_usage()
                ]);
            }

            return new Response(Gameplay::with('player')
                ->whereBetween('date_played', [$startDate, $endDate])
                ->orderBy('date_played')
                ->get());
        } catch (Exception $e) {
            return new Response(
                ["error" => "unsupported date format"],
                400,
                [
                    'X-Runtime' => microtime(true) - LUMEN_RUN,
                    'X-memory-used' => memory_get_usage()
                ]
            );
        }
    }

    /**
     * Return all top 100 game players
     *
     * @return Illuminate\Http\Response;
     */
    public function topPlayers()
    {
        $all = Player::withCount('gameplays')
            ->orderBy('gameplays_count', 'desc')
            ->take(100)
            ->get();
        return new Response(
            $all,
            200,
            [
                'X-Runtime' => microtime(true) - LUMEN_RUN,
                'X-memory-used' => memory_get_usage()
            ]
        );
    }
}
