<?php

namespace Database\Seeders;

use App\Models\Lop;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // \App\Models\SinhVien::factory(1000)->create();
         //User::factory(10)->create();
        $arr = [];
        for ($x = 1; $x <= 12; $x++) {
            $lop['name'] = $x;
            array_push($arr, $lop);
        }
        Lop::query()->insert($arr);
    }
}

