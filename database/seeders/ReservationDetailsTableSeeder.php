<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'reservation_details_id' => '',
            'reservation_id' => '',
            'room_id' => '101',
            'date' => '20241224'
            'price' => '10000'
        ];
        DB::table('reserves')->insert($param);
    }
}
