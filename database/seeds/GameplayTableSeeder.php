<?php

use App\Game;
use App\Gameplay;
use App\Multiplayer;
use Illuminate\Database\Seeder;

class GameplayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allGames = app('db')->select("SELECT date_added as date FROM games");
        $totalPlayers = app('db')->select("SELECT COUNT(*) as count FROM players");
        $totalGames = count($allGames);
        for ($i = 0; $i < 1; $i++) {  //non multiplayer games
            for ($j = 0; $j < 1; $j++) {
                $gamePlaying = rand(1, $totalGames-1);
                $randomYear = rand(intval(explode('-', $allGames[$gamePlaying]->date)[0]), 2020) . '-05-05';
                $playerId = rand(1, $totalPlayers[0]->count - 1);
                $this->insertGamePlay($gamePlaying, $playerId, $randomYear);
            }
        }

        // for ($i = 0; $i < 835; $i++) {  //multiplayer games
        //     for ($j = 1; $j < 50; $j++) {
        //         $gamePlaying = rand(1, $totalGames);
        //         $randomYear = rand(intval(explode('-', $allGames[8]->date)[0]), 2020) . '-05-05';
        //         $playerId = rand(1, $totalPlayers[0]->count);
        //         Multiplayer::insert([
        //             "initiate_id" => $playerId
        //         ]);
        //         $this->insertGamePlay($gamePlaying, $playerId, $randomYear, $j);
        //         for ($k = 0; $k < 5; $k++) { //insert random invitees
        //             $this->insertGamePlay($gamePlaying, rand(1, $totalPlayers[0]->count), $randomYear, $j);
        //         }
        //     }
        // }
    }

    public function insertGamePlay($gameId, $player_id, $date_played, $multiplayer_id = null)
    {
            Gameplay::insert([
                "game_id" => $gameId,
                "player_id" => 1,
                "date_played" => $date_played,
                "multiplayer_id" => $multiplayer_id
            ]);
    }
}
