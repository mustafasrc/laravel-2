<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServicesPageSeed extends Seeder
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
            $title=$faker->sentence(3);
            DB::table('servicespages')->insert([
                'name' => $title,
                'image' => $faker->imageUrl(1000, 800, 'cats', true, 'Faker'),
                'content' => $faker->paragraph(10),
                'slug' => Str::slug($title),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
