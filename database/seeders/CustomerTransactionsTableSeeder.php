<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_transactions')->delete();
        
        \DB::table('customer_transactions')->insert(array (
            0 => 
            array (
                'approved_by' => 1,
                'balance' => 500.0,
                'created_at' => '2024-02-12 21:55:57',
                'date' => '2024-02-12',
                'deleted_at' => NULL,
                'document' => NULL,
                'expense' => NULL,
                'id' => 1,
                'member_id' => 'M-000001',
                'payment_account' => NULL,
                'payment_type' => NULL,
                'status' => 1,
                'time' => '21:55:57',
                'transaction_id' => NULL,
                'transaction_type' => 1,
                'transfer' => NULL,
                'transfer_to' => NULL,
                'updated_at' => '2024-02-12 21:55:57',
                'vat' => NULL,
                'winbalance' => NULL,
                'winbalance_transfer' => NULL,
                'withdraw' => NULL,
            ),
            1 => 
            array (
                'approved_by' => 1,
                'balance' => NULL,
                'created_at' => '2024-02-12 21:56:10',
                'date' => '2024-02-12',
                'deleted_at' => NULL,
                'document' => NULL,
                'expense' => NULL,
                'id' => 2,
                'member_id' => 'M-000001',
                'payment_account' => NULL,
                'payment_type' => NULL,
                'status' => 1,
                'time' => '21:56:10',
                'transaction_id' => NULL,
                'transaction_type' => 5,
                'transfer' => NULL,
                'transfer_to' => NULL,
                'updated_at' => '2024-02-12 21:56:10',
                'vat' => NULL,
                'winbalance' => 400.0,
                'winbalance_transfer' => NULL,
                'withdraw' => NULL,
            ),
            2 => 
            array (
                'approved_by' => NULL,
                'balance' => NULL,
                'created_at' => '2024-02-12 22:01:51',
                'date' => '2024-02-12',
                'deleted_at' => NULL,
                'document' => NULL,
                'expense' => NULL,
                'id' => 3,
                'member_id' => 'M-000001',
                'payment_account' => '01575434262',
                'payment_type' => '2',
                'status' => 1,
                'time' => '22:01:51',
                'transaction_id' => NULL,
                'transaction_type' => 4,
                'transfer' => NULL,
                'transfer_to' => NULL,
                'updated_at' => '2024-02-12 22:02:15',
                'vat' => 1.0,
                'winbalance' => NULL,
                'winbalance_transfer' => NULL,
                'withdraw' => 11.0,
            ),
            3 => 
            array (
                'approved_by' => NULL,
                'balance' => -10.1,
                'created_at' => '2024-02-12 23:40:07',
                'date' => '2024-02-12',
                'deleted_at' => NULL,
                'document' => NULL,
                'expense' => NULL,
                'id' => 10,
                'member_id' => 'M-000001',
                'payment_account' => NULL,
                'payment_type' => NULL,
                'status' => 1,
                'time' => '23:40:07',
                'transaction_id' => NULL,
                'transaction_type' => 6,
                'transfer' => NULL,
                'transfer_to' => NULL,
                'updated_at' => '2024-02-12 23:40:07',
                'vat' => 0.1,
                'winbalance' => 10.0,
                'winbalance_transfer' => NULL,
                'withdraw' => NULL,
            ),
            4 => 
            array (
                'approved_by' => NULL,
                'balance' => 10.0,
                'created_at' => '2024-02-12 23:43:08',
                'date' => '2024-02-12',
                'deleted_at' => NULL,
                'document' => NULL,
                'expense' => NULL,
                'id' => 11,
                'member_id' => 'M-000001',
                'payment_account' => NULL,
                'payment_type' => NULL,
                'status' => 1,
                'time' => '23:43:08',
                'transaction_id' => NULL,
                'transaction_type' => 7,
                'transfer' => NULL,
                'transfer_to' => NULL,
                'updated_at' => '2024-02-12 23:43:08',
                'vat' => 0.1,
                'winbalance' => -10.1,
                'winbalance_transfer' => NULL,
                'withdraw' => NULL,
            ),
        ));
        
        
    }
}