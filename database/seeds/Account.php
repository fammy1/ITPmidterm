<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class Account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'acct_name' => 'Bautista Trust Fund',
            'init_invest'=>890500.00,
            'start_date'=>'2020-06-03',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id'=>1
        ]);
        DB::table('accounts')->insert([
            'acct_name' => 'Lenteria B. Regular Account',
            'init_invest'=>12500.00,
            'start_date'=>'2020-03-23',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id'=>2
        ]);
        DB::table('accounts')->insert([
            'acct_name' => 'Reyes A.M. Regular Account',
            'init_invest'=>18500.00,
            'start_date'=>'2020-05-28',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'user_id'=>3
        ]);
    }
}
