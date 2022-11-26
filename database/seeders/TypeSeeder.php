<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = [
            [
                'type_name' => 'Bungalow',
                'type_description' => 'a low house, with a broad front porch, having either no upper floor or upper rooms set in the roof, typically with dormer windows.'
            ],
            [
                'type_name' => 'Villa',
                'type_description' => 'a large, luxurious house, especially one with grounds, a swimming pool, etc.'
            ],
            [
                'type_name' => 'Apartment',
                'type_description' => 'a room or a set of rooms forming a separate residence within a house, block of flats, or other building, rented or owned by a single person or family.'
            ],
            [
                'type_name' => 'Hotel',
                'type_description' => 'a building where people pay to stay overnight when they are traveling.'
            ],
            [
                'type_name' => 'Resort',
                'type_description' => 'a place where people go to relax and enjoy themselves, especially one that has a swimming pool, a beach, etc.'
            ],
        ];
        Type::insert($type);
    }
}
