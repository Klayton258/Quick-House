<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $types = [
            ['type_name' => 'Sell','created_at'=> now(), 'updated_at'=> now()],
            ['type_name' => 'Rent','created_at'=> now(), 'updated_at'=> now()],
            ['type_name' => 'Project','created_at'=> now(), 'updated_at'=> now()],
        ];

        foreach($types as $item){
            DB::table('types')->insert($item);
        }

        $outdoor = [
            ['out_boolean' => 'false','created_at'=> now(), 'updated_at'=> now()],
            ['out_boolean' => 'true','created_at'=> now(), 'updated_at'=> now()],
        ];

        foreach($outdoor as $item){
            DB::table('outdoors')->insert($item);
        }

        $promotion = [
            ['pro_boolean' => 'false','pro_price' => 'none','created_at'=> now(), 'updated_at'=> now()],
        ];

        foreach($promotion as $item){
            DB::table('promotions')->insert($item);
        }

        $level = [
            ['level' => 'NEW','created_at'=> now(), 'updated_at'=> now()],
            ['level' => 'AVALIABLE','created_at'=> now(), 'updated_at'=> now()],
            ['level' => 'SOLD','created_at'=> now(), 'updated_at'=> now()],
        ];

        foreach($level as $item){
            DB::table('levels')->insert($item);
        }

        $times = [
            ['time_1' => now(),'created_at'=> now(), 'updated_at'=> now()],
            ['time_2' => '2022-10-21 12:15:25','created_at'=> now(), 'updated_at'=> now()],
            ['time_3' => '2022-11-25 15:15:28','created_at'=> now(), 'updated_at'=> now()],
        ];

        foreach($times as $item){
            DB::table('times')->insert($item);
        }
    }
}
