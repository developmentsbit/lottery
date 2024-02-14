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
                'id' => 2,
                'method_name' => 'Bkash',
                'method_name_bn' => 'বিকাশ',
                'number' => '01575434262,01872583429',
                'status' => 1,
                'updated_at' => '2024-02-12 21:45:29',
                'vat' => 10.0,
            ),
        ));
        
        
    }
}