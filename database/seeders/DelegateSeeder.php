<?php

namespace Database\Seeders;

use App\Models\Delegate;
use Illuminate\Database\Seeder;

class DelegateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delegate = Delegate::create
        ([
            'delegate_code'     => 1,
            'name' => 'بدون',
            'account_number'    => 3,
            'start_balance_status' => 3,
            'start_balance' => 0,
            'current_balance' => 0,
            'added_by' => 1,
            'active' => 1,
            'com_code' => 1,
            'date' => now(),
            'phones' => 01000000000,
            'address' => 'non',
            'percent_type' => 1,
            'percent_collect_commission' => 0,
            'percent_salaes_commission_kataei' => 0,
            'percent_salaes_commission_nosjomla' => 0,
            'percent_salaes_commission_jomla' => 0,
            'created_at' => now(),
        ]);
    }
}
