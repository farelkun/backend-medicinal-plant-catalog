<?php

namespace Database\Seeders;

use App\Models\RarePlant;
use Illuminate\Database\Seeder;

class RarePlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data2 = [
            [
                "id"=> 1,
                "plant_id"=> 2
            ],
            [
                "id"=> 2,
                "plant_id"=> 1
            ],
            [
                "id"=> 3,
                "plant_id"=> 3
            ]
        ];

        RarePlant::insert($data2);
    }
}
