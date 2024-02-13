<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Banner For User Dashboard',
                'image' => '1465822567.gif',
                'created_at' => NULL,
                'updated_at' => '2024-02-13 12:37:47',
            ),
        ));
        
        
    }
}