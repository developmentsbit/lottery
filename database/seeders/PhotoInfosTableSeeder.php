<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhotoInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('photo_infos')->delete();
        
        \DB::table('photo_infos')->insert(array (
            0 => 
            array (
                'created_at' => '2024-02-13 16:43:07',
                'deleted_at' => NULL,
                'id' => 1,
                'image' => '575930536.jpg',
                'slider' => 1,
                'status' => 1,
                'title' => 'Slider 1',
                'title_bn' => 'Slider 1',
                'updated_at' => '2024-02-13 16:43:07',
            ),
            1 => 
            array (
                'created_at' => '2024-02-13 16:43:37',
                'deleted_at' => NULL,
                'id' => 2,
                'image' => '1514105208.jpg',
                'slider' => 1,
                'status' => 1,
                'title' => 'Slider 2',
                'title_bn' => 'Slider 2',
                'updated_at' => '2024-02-13 16:43:37',
            ),
            2 => 
            array (
                'created_at' => '2024-02-13 16:43:57',
                'deleted_at' => NULL,
                'id' => 3,
                'image' => '1586440077.jpg',
                'slider' => 1,
                'status' => 1,
                'title' => 'Slider 3',
                'title_bn' => 'Slider 3',
                'updated_at' => '2024-02-13 16:43:57',
            ),
            3 => 
            array (
                'created_at' => '2024-02-13 16:44:21',
                'deleted_at' => NULL,
                'id' => 4,
                'image' => '1217875963.jpg',
                'slider' => 1,
                'status' => 1,
                'title' => 'Slider 4',
                'title_bn' => 'Slider 4',
                'updated_at' => '2024-02-13 16:44:21',
            ),
        ));
        
        
    }
}