<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '2012M');
        DB::disableQueryLog();
        // $this->call('GamesTableSeeder');
        $this->call('PlayersTableSeeder');
        // $this->call('GameplayTableSeeder');
    }
}
