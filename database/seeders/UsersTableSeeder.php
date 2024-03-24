<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'branch_id' => 1,
                'name' => 'Super Admin',
                'name_bn' => 'সুপার অ্যাডিমন',
                'email' => 'super@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WPj1NQUK62bFPZP9VDX5m.s85XdVXo3Y7xyWvMdTq9bMN8kFeNZge',
                'phone' => '01800000000',
                'gender' => 'Male',
                'profile' => '101350131.png',
                'create_by' => 1,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-28 11:55:32',
                'updated_at' => '2024-03-24 11:10:46',
            ),
            1 => 
            array (
                'id' => 2,
                'branch_id' => 1,
                'name' => 'Sumsul Karim Chowdhury',
                'name_bn' => 'সামছুল করিম চৌধুরী',
                'email' => 'tanimchy417@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DiVOtp7Oop3DXgKy1v6QJu0943gYmaxyKMr.Tu3M8sQ0EdKl1kRau',
                'phone' => '01575434262',
                'gender' => 'Male',
                'profile' => '585274628.png',
                'create_by' => 1,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-28 23:20:36',
                'updated_at' => '2023-10-31 13:00:34',
            ),
            2 => 
            array (
                'id' => 3,
                'branch_id' => 1,
                'name' => 'Agent - 1',
                'name_bn' => NULL,
                'email' => 'agent1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iKij/HLFBR3LdN3C1Dc6tO.X8GaXVPozHDwZcFGcBBcwngk9QkfUi',
                'phone' => '01575434263',
                'gender' => 'Male',
                'profile' => '0',
                'create_by' => 1,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-17 16:46:26',
                'updated_at' => '2024-02-17 16:46:26',
            ),
            3 => 
            array (
                'id' => 4,
                'branch_id' => 1,
                'name' => 'Admin',
                'name_bn' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DOdc6hF5dp5KrZH20NEtRe5TDcvzEIWhhmZZoaFWN.1952jxL/X8S',
                'phone' => '+880',
                'gender' => 'Male',
                'profile' => '0',
                'create_by' => 1,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-24 11:19:25',
                'updated_at' => '2024-03-24 11:19:25',
            ),
        ));
        
        
    }
}