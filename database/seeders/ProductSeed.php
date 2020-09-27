<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeed extends Seeder
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
            $title=$faker->sentence(2);
            DB::table('products')->insert([
                'name' => $faker->title,
                'price' => rand(500,2500),
                'categories' => rand(1,7),
                'image' => $faker->imageUrl(1000, 800, 'cats', true, 'Faker'),
                'content' => $faker->paragraph(10),
                'slug' => Str::slug($title),
                'stock' => rand(0,20) ,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
