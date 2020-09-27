<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class PhotoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i =0 ; $i < 20 ; $i++) {
            DB::table('photos')->insert([
               'image' => $faker->imageUrl(1000, 800, 'cats', true, 'Faker'),
                'category' => rand(1,4),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
