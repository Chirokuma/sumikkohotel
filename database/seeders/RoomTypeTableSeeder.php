<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'すみっコルーム',
        ];
        DB::table('RoomType')->insert($param);

        $param = [
            'name' => '洋室ツイン',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '洋室ダブル',
        ];
        DB::table('guests')->insert($param);
    }
}
