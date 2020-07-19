<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = 1;
        for ($i = 1; $i < 100;) {
            for($j = 1; $j < 100; $j++){
                factory(App\Player::class)->create(
                    ['id'=> $id++]
                );
            }
        }
    }
}
