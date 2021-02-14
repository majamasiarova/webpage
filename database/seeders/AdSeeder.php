<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')
            ->where('name', 'user')
            ->first();
        $categories = ['Autá', 'Oblečenie', 'Elektronika', 'Dom a záhrada', 'Reality,Byty,Domy',
            'Stroje', 'Mobily', 'Motorky', 'Práca', 'Počítače', 'Hudba', 'Zvieratá', 'Ostatné', 'Služby',
            'Knihy', 'Nábytok', 'Športové potreby', 'Zdravie a krása',
            'Deti a detské potreby'];

        for ($i = 1; $i < 100; $i++) {
            DB::table('ads')->insert([
                'user_id' => $user->id,
                'description' => Str::random(15),
                'category' => $categories[array_rand($categories, 1)],
                'price' => random_int(10, 2600),
                'name' => Str::random(15),
                'location' => Str::random(9),
            ]);
        }

    }
}
