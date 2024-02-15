<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_methods')->delete();
        
        \DB::table('payment_methods')->insert(array (
            0 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-12 21:42:15',
                'deleted_at' => NULL,
                'dollar_rate' => 110.0,
                'id' => 2,
                'method_name' => 'Bkash',
                'method_name_bn' => 'বিকাশ',
                'number' => '01575434262,01872583429',
                'status' => 1,
                'updated_at' => '2024-02-15 19:07:52',
                'vat' => 10.0,
            ),
            1 => 
            array (
                'create_by' => 1,
                'created_at' => '2024-02-15 19:08:31',
                'deleted_at' => NULL,
                'dollar_rate' => 115.0,
                'id' => 3,
                'method_name' => 'Skrill',
                'method_name_bn' => NULL,
                'number' => 'tanimchy417@gmail.com',
                'status' => 1,
                'updated_at' => '2024-02-15 19:08:31',
                'vat' => 5.0,
            ),
        ));
        
        
    }
}