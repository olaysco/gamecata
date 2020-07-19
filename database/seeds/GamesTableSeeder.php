<?php

use App\Game;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE games AUTO_INCREMENT =1;');
        $faker = Faker::create();
        $output = new Symfony\Component\Console\Output\ConsoleOutput();
        $path = base_path() . "/games.json";
        $games = json_decode(file_get_contents($path), true);
        $id = 1;
        $gameKeys = ["Call of Duty", "Mortal Kombat", "FIFA", "Just Cause", "Apex Legend"];
        foreach($gameKeys as $key){
            for ($i = 0; $i < count($games[$key]); $i++) {
                Game::insert([
                    "version" => $games[$key][$i]["version"],
                    "name" => $key,
                    "date_added" => $games[$key][$i]["year"] . '-10-02',
                    "id" => $id++
                ]);
            }
        }
    }
}
