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
            'reservation_id' => '1000',
            'guest_id' => '1',
            'number_of_guests' => '1',
            'checkin' => '20241224',
            'checkout' => '20241226'
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'reservation_id' => '1001',
            'guest_id' => '2',
            'number_of_guests' => '2',
            'checkin' => '20241101',
            'checkout' => '20241102'
        ];
        DB::table('Reservations')->insert($param);

    }
}
