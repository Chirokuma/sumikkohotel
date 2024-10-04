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
            'room_id' => '101',
            'room_type_id' => '9',
            'room_name' => 'すみっコルーム',
            'bed_type' => '洋室ツイン',
            'capacity' => '2人',
        ];
        DB::table('RoomType')->insert($param);

        $param = [
            'room_id' => '102',
            'room_type_id' => '99',
            'room_name' => 'デラックスルーム',
            'bed_type' => '洋室ツイン',
            'capacity' => '2人',
        ];
        DB::table('RoomType')->insert($param);

        $param = [
            'room_id' => '103',
            'room_type_id' => '99',
            'name' => 'クラシックルーム',
            'bedtype' => '洋室ダブル',
            'capacity' => '2人',
        ];
        DB::table('RoomType')->insert($param);

        $param = [
            'room_id' => '104',
            'room_type_id' => '99',
            'name' => 'クラシックルーム',
            'bedtype' => '洋室ダブル',
            'capacity' => '2人',
        ];
        DB::table('RoomType')->insert($param);
    }
}
