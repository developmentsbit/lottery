<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'name_bn' => 'সুপার অ্যাডমিন',
                'guard_name' => 'web',
                'create_by' => 1,
                'edit_by' => NULL,
                'delete_by' => NULL,
                'restore_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 11:56:10',
                'updated_at' => '2023-10-28 11:56:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'name_bn' => 'অ্যাডমিন',
                'guard_name' => 'web',
                'create_by' => 1,
                'edit_by' => NULL,
                'delete_by' => NULL,
                'restore_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2023-10-28 11:56:21',
                'updated_at' => '2023-10-28 11:56:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Agent',
                'name_bn' => 'এজেন্ট',
                'guard_name' => 'web',
                'create_by' => NULL,
                'edit_by' => NULL,
                'delete_by' => NULL,
                'restore_by' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2024-02-17 16:35:43',
                'updated_at' => '2024-02-17 16:35:43',
            ),
        ));
        
        
    }
}