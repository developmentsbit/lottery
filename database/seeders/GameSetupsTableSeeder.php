<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GameSetupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('game_setups')->delete();
        
        \DB::table('game_setups')->insert(array (
            0 => 
            array (
                'created_at' => '2024-02-05 21:25:36',
                'deleted_at' => NULL,
                'end_date' => '2024-02-19',
                'end_time' => '21:28:00',
                'game_title' => 'Thai Lottery',
                'game_title_bn' => 'থাই লটারি',
                'id' => 1,
                'start_date' => '2024-02-05',
                'start_time' => '21:27:00',
                'status' => 0,
                'updated_at' => '2024-02-10 16:20:54',
            ),
            1 => 
            array (
                'created_at' => '2024-02-10 16:20:46',
                'deleted_at' => NULL,
                'end_date' => '2024-02-13',
                'end_time' => '14:19:00',
                'game_title' => 'Bangla Lottery',
                'game_title_bn' => NULL,
                'id' => 3,
                'start_date' => '2024-02-10',
                'start_time' => '16:20:00',
                'status' => 1,
                'updated_at' => '2024-02-13 14:16:13',
            ),
        ));
        
        
    }
}