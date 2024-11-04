<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('writers')->insert([
            [
                'name' => $faker->name,
                'speciality' => 'Data Science',
                'photo' => 'https://randomuser.me/api/portraits/' . ($faker->boolean ? 'men/' : 'women/') . $faker->numberBetween(1, 99) . '.jpg',
            ],
            [
                'name' => $faker->name,
                'speciality' => 'Data Science',
                'photo' => 'https://randomuser.me/api/portraits/' . ($faker->boolean ? 'men/' : 'women/') . $faker->numberBetween(1, 99) . '.jpg',
            ],
            [
                'name' => $faker->name,
                'speciality' => 'Network Security',
                'photo' => 'https://randomuser.me/api/portraits/' . ($faker->boolean ? 'men/' : 'women/') . $faker->numberBetween(1, 99) . '.jpg',
            ]
        ]);
    }
}
