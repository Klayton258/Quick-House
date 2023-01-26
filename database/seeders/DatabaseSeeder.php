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
            ['type_name' => 'For Sale','created_at'=> now(), 'updated_at'=> now()],
            ['type_name' => 'For Rent','created_at'=> now(), 'updated_at'=> now()],
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

        // $promotion = [
        //     ['pro_boolean' => 'false','pro_price' => 'none','created_at'=> now(), 'updated_at'=> now()],
        // ];

        // foreach($promotion as $item){
        //     DB::table('promotions')->insert($item);
        // }

        $level = [
            ['level' => 'NEW','created_at'=> now(), 'updated_at'=> now()],
            ['level' => 'AVALIABLE','created_at'=> now(), 'updated_at'=> now()],
            ['level' => 'SOLD','created_at'=> now(), 'updated_at'=> now()],
        ];

        foreach($level as $item){
            DB::table('levels')->insert($item);
        }

        //Category And house
        \App\Models\Category::factory(6)->create();
        \App\Models\House::factory(16)->create();
        // $roles = [
        //     ['role_name' => 'CLIENT','created_at'=> now(), 'updated_at'=> now()],
        //     ['role_name' => 'CREATE_HOUSE','created_at'=> now(), 'updated_at'=> now()],
        //     ['role_name' => 'EDIT_HOUSE','created_at'=> now(), 'updated_at'=> now()],
        //     ['role_name' => 'DELETE_HOUSE','created_at'=> now(), 'updated_at'=> now()],
        //     ['role_name' => 'MANAGE_USERS','created_at'=> now(), 'updated_at'=> now()],
        // ];

        // foreach($roles as $item){
        //     DB::table('roles')->insert($item);
        // }
    }
}
