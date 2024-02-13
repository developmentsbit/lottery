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
                'created_at' => NULL,
                'id' => 1,
                'image' => '831617964.gif',
                'title' => '0',
                'updated_at' => '2024-02-13 17:22:46',
            ),
        ));


    }
}
