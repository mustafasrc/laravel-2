<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i =0 ; $i < 25 ; $i++) {
            $title=$faker->sentence(5);
            DB::table('posts')->insert([
                'name' => $title,
                'slug' => Str::slug($title),
                'image' => $faker->imageUrl(1000, 800, 'cats', true, 'Faker'),
                'content' => $faker->paragraph(25),
                'subject' => $title,
                'status' => rand(0,1),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
