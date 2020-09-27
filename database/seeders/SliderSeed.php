<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SliderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i =0 ; $i < 5 ; $i++) {
            DB::table('sliders')->insert([
                'name' => $faker->title,
                'image' => $faker->imageUrl(1000, 800, 'cats', true, 'Faker'),
                'status' => rand(0,1),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
