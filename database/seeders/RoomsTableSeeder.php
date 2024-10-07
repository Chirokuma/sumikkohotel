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
            'room_id' => 'sumi',
            'room_type_id' => '9',
            'room_number' => '101',
         ];
        DB::table('Rooms')->insert($param);

        $param = [
            'room_id' => 'dela',
            'room_type_id' => '99',
            'room_number' => '102',
        ];
        DB::table('Rooms')->insert($param);

        $param = [
            'room_id' => 'cla',
            'room_type_id' => '999',
            'room_number' => '103',
        ];
        DB::table('Rooms')->insert($param);

        $param = [
            'room_id' => 'cla',
            'room_type_id' => '999',
            'room_number' => '104',
        ];
        DB::table('Rooms')->insert($param);

           }
}
