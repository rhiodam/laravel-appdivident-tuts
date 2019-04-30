<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transactions')->insert([
            'employee_id' => 1,
            'transaction_amount' => 34000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('transactions')->insert([
            'employee_id' => 1,
            'transaction_amount' => 7000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('transactions')->insert([
            'employee_id' => 2,
            'transaction_amount' => 92000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('transactions')->insert([
            'employee_id' => 2,
            'transaction_amount' => 54000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('transactions')->insert([
            'employee_id' => 3,
            'transaction_amount' =>52000,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
