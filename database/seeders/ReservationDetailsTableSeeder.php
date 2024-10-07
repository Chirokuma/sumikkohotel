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
            'reservation_details_id' => 'a',
            'reservation_id' => '1000',
            'room_id' => '101',
            'date' => '20241224',
            'price' => '100000'
        ];
        DB::table('reserves')->insert($param);

                $param = [
            'reservation_details_id' => 'b',
            'reservation_id' => '1001',
            'room_id' => '101',
            'date' => '20241224',
            'price' => '100000'
        ];
        DB::table('reserves')->insert($param);

                $param = [
            'reservation_details_id' => 'c',
            'reservation_id' => '1000',
            'room_id' => '101',
            'date' => '20241224',
            'price' => '100000'
        ];
        DB::table('reserves')->insert($param);
    }
}
