<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['L Takımı Koltuklar' , 'L Takımı Kanepeler' , 'Bej Koltuklar' , 'Sedir Takımları' , 'Dolap Takımları' , 'Halı' , 'Sehpa ve Abojür'];
        foreach ($categories as $category) {
            DB::table('product_categories')->insert([
               'name' => $category,
                'product' => 0,
                'slug' => Str::slug($category),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
