<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SoftwareSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('software_settings')->delete();
        
        \DB::table('software_settings')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'favicon' => '455602170.png',
                'id' => 1,
                'logo' => '635554939.png',
                'meta_description' => NULL,
                'meta_tag' => NULL,
                'meta_title' => NULL,
                'title_bn' => 'สลากกินแบ่งรัฐบาลไทย',
                'title_en' => 'Thai Goverment Lottery',
                'updated_at' => '2024-02-13 17:31:01',
            ),
        ));
        
        
    }
}