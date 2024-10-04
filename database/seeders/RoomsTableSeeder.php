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
            'room_type_id' => '',
            'room_number' => '101',
            'room_number' => '101',
            'room_number' => '101',

        ];
        DB::table('Rooms')->insert($param);

           }
}
