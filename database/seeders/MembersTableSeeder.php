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
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'created_at' => '2024-01-29 15:30:24',
                'deleted_at' => NULL,
                'email' => 'tanimchy417@gmail.com',
                'first_name' => 'Sumsul',
                'gender' => 'Male',
                'id' => 1,
                'last_name' => 'Karims',
                'member_id' => 'M-000001',
                'mobile_no' => '01575434262',
                'nationality' => 'Bangladesh',
                'password' => '$2y$10$QaTd0HDkzUQA7V2pP9OVE.kgWC0kV5frNcW494xMvaFTRPmVfD9pa',
                'profile' => '1431851857.jpg',
                'raw_text_pass' => '123',
                'referral_no' => 'TEST00001',
                'updated_at' => '2024-02-14 15:49:56',
            ),
            1 => 
            array (
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'created_at' => '2024-02-10 12:18:17',
                'deleted_at' => NULL,
                'email' => 'tanimchy417@gmail.com',
                'first_name' => 'Md',
                'gender' => 'Male',
                'id' => 2,
                'last_name' => 'Tanim',
                'member_id' => 'M-000002',
                'mobile_no' => '01872583429',
                'nationality' => 'Bangladesh',
                'password' => '$2y$10$zHHQMT9fpnW1g1WX/T6rzOzrOHJhTCI22l2xSKjfZr/Y1h33tLHY2',
                'profile' => '0',
                'raw_text_pass' => NULL,
                'referral_no' => '001',
                'updated_at' => '2024-02-10 12:18:17',
            ),
            2 => 
            array (
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'created_at' => '2024-02-10 12:20:36',
                'deleted_at' => NULL,
                'email' => 'tanimchy417@gmail.com',
                'first_name' => 'Md',
                'gender' => 'Male',
                'id' => 3,
                'last_name' => 'Tazim',
                'member_id' => 'M-000003',
                'mobile_no' => '01814499606',
                'nationality' => 'Bangladesh',
                'password' => '$2y$10$nW0eJjQyESTy2ig4JlNeBu9ZTUOLAcItXdOWk5KoIhSQoXP94Xnv.',
                'profile' => '0',
                'raw_text_pass' => NULL,
                'referral_no' => '2585545456',
                'updated_at' => '2024-02-10 12:20:36',
            ),
            3 => 
            array (
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'created_at' => '2024-02-12 02:02:22',
                'deleted_at' => NULL,
                'email' => 'tanimchy417@gmail.com',
                'first_name' => 'Sumsul',
                'gender' => 'Male',
                'id' => 4,
                'last_name' => 'Karim',
                'member_id' => 'M-000004',
                'mobile_no' => '01575434263',
                'nationality' => 'Bangladesh',
                'password' => '$2y$10$oAM1q3SVg2t5zocE/C1ryeRFza3EW7B6CoUvmkE12ArsFnOZf0mWe',
                'profile' => '0',
                'raw_text_pass' => NULL,
                'referral_no' => NULL,
                'updated_at' => '2024-02-12 02:02:22',
            ),
            4 => 
            array (
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'created_at' => '2024-02-12 22:38:02',
                'deleted_at' => NULL,
                'email' => 'tanimchy@gmail.com',
                'first_name' => 'Asif',
                'gender' => 'Male',
                'id' => 5,
                'last_name' => 'Saiful',
                'member_id' => 'M-000005',
                'mobile_no' => '01814499607',
                'nationality' => 'Bangladesh',
                'password' => '$2y$10$ZnDuxUWEUYriWLvj.Qqn2ezSpmY9yh4PuCFR0lS/Qhdwr1YRG1ZwG',
                'profile' => '0',
                'raw_text_pass' => NULL,
                'referral_no' => 'M-000001',
                'updated_at' => '2024-02-12 22:38:02',
            ),
            5 => 
            array (
                'city' => 'Feni',
                'country' => 'Bangladesh',
                'created_at' => '2024-02-13 12:27:52',
                'deleted_at' => NULL,
                'email' => 'tanimchy417@gmail.com',
                'first_name' => 'Sumsul',
                'gender' => 'Male',
                'id' => 6,
                'last_name' => 'Karim',
                'member_id' => 'M-000006',
                'mobile_no' => '01814499608',
                'nationality' => 'Afghanistan',
                'password' => '$2y$10$YE3p3IKOtJvFkSTn0nDmfeb2JRMLXr1mm6OW2JQF6VVKMvC6e4LvK',
                'profile' => '0',
                'raw_text_pass' => NULL,
                'referral_no' => NULL,
                'updated_at' => '2024-02-13 12:27:52',
            ),
        ));
        
        
    }
}