<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class YoutubelivesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('youtubelives')->delete();
        
        \DB::table('youtubelives')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Thai Lottery Live Draw',
                'title_bn' => 'থাই লটারি লাইভ ড্র',
                'url' => 'https://www.youtube.com/embed/R3NfCQliOvA?si=JKZsu3Vc3RhRr9kg',
                'created_at' => NULL,
                'updated_at' => '2024-02-10 11:57:35',
            ),
        ));
        
        
    }
}