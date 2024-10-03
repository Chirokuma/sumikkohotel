<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'reserve_id' => '1000',
            'guest_id' => '1',
            'person' => '1',
            'checkin' => '20241224',
            'checkout' => '20241226'
        ];
        DB::table('reserves')->insert($param);
    }
}
