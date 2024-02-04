<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuLabelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_labels')->delete();
        
        \DB::table('menu_labels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label_name_en' => 'Developers Area',
                'label_name_bn' => 'ডেভেলপার',
                'order_by' => 1,
                'create_by' => 1,
                'edit_by' => 1,
                'delete_by' => NULL,
                'restore_by' => NULL,
                'deleted_at' => NULL,
                'status' => 1,
                'created_at' => '2023-10-28 12:07:21',
                'updated_at' => '2023-10-28 12:19:20',
            ),
            1 => 
            array (
                'id' => 2,
                'label_name_en' => 'Authentication',
                'label_name_bn' => 'সিকিউরিটি',
                'order_by' => 2,
                'create_by' => 1,
                'edit_by' => 1,
                'delete_by' => NULL,
                'restore_by' => NULL,
                'deleted_at' => NULL,
                'status' => 1,
                'created_at' => '2023-10-28 13:51:41',
                'updated_at' => '2023-10-30 15:21:06',
            ),
            2 => 
            array (
                'id' => 6,
                'label_name_en' => 'Settings',
                'label_name_bn' => 'সেটিংস',
                'order_by' => 4,
                'create_by' => 1,
                'edit_by' => NULL,
                'delete_by' => NULL,
                'restore_by' => NULL,
                'deleted_at' => NULL,
                'status' => 1,
                'created_at' => '2023-10-30 23:54:52',
                'updated_at' => '2023-10-30 23:54:52',
            ),
            3 => 
            array (
                'id' => 7,
                'label_name_en' => 'Member',
                'label_name_bn' => 'সদস্য',
                'order_by' => 3,
                'create_by' => 1,
                'edit_by' => NULL,
                'delete_by' => NULL,
                'restore_by' => NULL,
                'deleted_at' => NULL,
                'status' => 1,
                'created_at' => '2024-02-04 21:06:10',
                'updated_at' => '2024-02-04 21:06:10',
            ),
        ));
        
        
    }
}