<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; i < 20; $i++) {
            DB::table('ads')->insert([
                'user_id' =>
                'description' => Str::random(15),
                'category' => Str::random(10),
                'price' => random_int(10,2600),
                'name' => Str::random(15),
                'location' => Str::random(9),
            ]);
        }

    }
}
