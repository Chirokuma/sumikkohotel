<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'roomnumber' => '101',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'roomnumber' => '102',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'roomnumber' => '103',
        ];
        DB::table('guests')->insert($param);
    }
}
