<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param $
     * @return void
     */
    public function run()
    {
        $adminRole = DB::table('roles')
            ->where ('title','admin')
            ->first();
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@bazar.sk',
            'password' => Hash::make('dtb'),
            'first_name' => 'administrator',
            'last_name' => 'nieco',
            'location' =>'Bratislava',
            'phone_number' =>'0900000000',
            'role_id' =>$adminRole->id,
        ]);

        $userRole = DB::table('roles')
            ->where ('title','user')
            ->first();
        DB::table('users')->insert([
            'name'=>'user',
            'email'=>'user@bazar.sk',
            'password' => Hash::make('dtb'),
            'first_name' => 'username',
            'last_name' => 'lastname',
            'location' =>'Bratislava',
            'phone_number' =>'0900000001',
            'role_id' =>$userRole->id,
        ]);


    }
}
