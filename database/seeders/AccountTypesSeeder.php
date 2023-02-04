<?php

namespace Database\Seeders;

use App\Models\Account_types;
use Illuminate\Database\Seeder;

class AccountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account_types1 = Account_types::create([
            'id'                     => 1,
            'name'                   => 'رأس مال',
            'relatediternalaccounts' => 0,
            'active'                 => 1,
        ]);

        $account_types2 = Account_types::create([
            'id'                     => 2,
            'name'                   => 'مورد',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        $account_types3 = Account_types::create([
            'id'                     => 3,
            'name'                   => 'عميل',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        $account_types4 = Account_types::create([
            'id'                     => 4,
            'name'                   => 'مندوب',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        // $account_types5 = Account_types::create([
        //     'id'                     => 5,
        //     'name'                   => 'خط إنتاج',
        //     'relatediternalaccounts' => 1,
        //     'active'                 => 1,
        // ]);

        // $account_types6 = Account_types::create([
        //     'id'                     => 6,
        //     'name'                   => 'بنكى',
        //     'relatediternalaccounts' => 0,
        //     'active'                 => 1,
        // ]);

        $account_types7 = Account_types::create([
            'id'                     => 7,
            'name'                   => 'مصروفات',
            'relatediternalaccounts' => 0,
            'active'                 => 1,
        ]);

        // $account_types8 = Account_types::create([
        //     'id'                     => 8,
        //     'name'                   => 'قسم داخلى',
        //     'relatediternalaccounts' => 1,
        //     'active'                 => 1,
        // ]);

        $account_types9 = Account_types::create([
            'id'                     => 9,
            'name'                   => 'عام',
            'relatediternalaccounts' => 0,
            'active'                 => 1,
        ]);
    }
}
