<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([[
            // 'id' => 1,
            'label'=> 'Game of the Year (Test)',
			'description'=> 'This is the first game created'
        ],
        [
            // 'id' => 2,
            'label'=> 'Game of the Year2',
			'description'=> 'This is the second game created'
        ],
        [
            // 'id' => 2,
            'label'=> 'Game of the Year3',
			'description'=> 'This is the third game created'
        ]]);
    }
}
