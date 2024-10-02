<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $param = [
            'guest_id' => '1',
            'name' => 'しろくま',
            'address' => '奈良県宇陀市',
            'tel' => '090-4690-4690'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'guest_id' => '2',
            'name' => 'ねこ',
            'address' => '兵庫県西宮市',
            'tel' => '090-5555-5555'
        ];
        DB::table('guests')->insert($param);

        
    }
}
