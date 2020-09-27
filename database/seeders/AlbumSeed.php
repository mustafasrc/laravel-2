<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlbumSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = ['Şirket' , 'Ofis' , 'sanayi' , 'Yurtdışı'];
        foreach ($albums as $album) {
            DB::table('albumcategories')->insert([
               'name' => $album,
                'slug' => Str::slug($album),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }
}
