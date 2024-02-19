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
                'image' => '749447172.gif',
                'running_notice' => 'The Government Approved 100% Trusted Website www.Thailotto3up.com . You will play 1st Prize Six Digit, 3up, 2up, Down Game. 3up, 2up, Down Single digit and 3up, 2up, Down Game Total, If you Interested about Thai Lottery game Now Signup This Site www.Thailotto3up.com . Try Your Luck & Enjoy your life. Have a Nice Good Day. THANK YOU.',
                'updated_at' => '2024-02-19 17:32:30',
            ),
        ));
        
        
    }
}