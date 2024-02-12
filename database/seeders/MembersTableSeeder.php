<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('members')->delete();

        \DB::table('members')->insert(array (
            0 =>
            array (
                'id' => 1,
                'member_id' => 'M-000001',
                'referral_no' => 'TEST00001',
                'mobile_no' => '01575434262',
                'password' => '$2y$10$9NusScc9h3.H2NjjCJCHNuX3ZsMjs6qdUeJni74SUvH2de1D/up3S',
                'first_name' => 'Sumsul',
                'last_name' => 'Karim',
                'gender' => 'Male',
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'email' => 'tanimchy417@gmail.com',
                'nationality' => 'Bangladesh',
                'profile' => '0',
                'deleted_at' => NULL,
                'created_at' => '2024-01-29 15:30:24',
                'updated_at' => '2024-01-29 15:30:24',
            ),
            1 =>
            array (
                'id' => 2,
                'member_id' => 'M-000002',
                'referral_no' => '001',
                'mobile_no' => '01872583429',
                'password' => '$2y$10$zHHQMT9fpnW1g1WX/T6rzOzrOHJhTCI22l2xSKjfZr/Y1h33tLHY2',
                'first_name' => 'Md',
                'last_name' => 'Tanim',
                'gender' => 'Male',
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'email' => 'tanimchy417@gmail.com',
                'nationality' => 'Bangladesh',
                'profile' => '0',
                'deleted_at' => NULL,
                'created_at' => '2024-02-10 12:18:17',
                'updated_at' => '2024-02-10 12:18:17',
            ),
            2 =>
            array (
                'id' => 3,
                'member_id' => 'M-000003',
                'referral_no' => '2585545456',
                'mobile_no' => '01814499606',
                'password' => '$2y$10$nW0eJjQyESTy2ig4JlNeBu9ZTUOLAcItXdOWk5KoIhSQoXP94Xnv.',
                'first_name' => 'Md',
                'last_name' => 'Tazim',
                'gender' => 'Male',
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'email' => 'tanimchy417@gmail.com',
                'nationality' => 'Bangladesh',
                'profile' => '0',
                'deleted_at' => NULL,
                'created_at' => '2024-02-10 12:20:36',
                'updated_at' => '2024-02-10 12:20:36',
            ),
        ));


    }
}
