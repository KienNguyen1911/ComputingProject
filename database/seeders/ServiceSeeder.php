<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('services')->insert([
                'service_name' => $faker->name,
                'service_price' => $faker->numberBetween($min = 1000, $max = 9000),
                'service_description' => $faker->text($maxNbChars = 200),
            ]);
        }
    }
}
