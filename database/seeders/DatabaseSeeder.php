<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeed::class);
        $this->call(ConfigSeed::class);
        $this->call(İnformationSeed::class);
        $this->call(AlbumSeed::class);
        $this->call(PhotoSeed::class);
        $this->call(SliderSeed::class);
        $this->call(ProductCategorySeed::class);
        $this->call(ProductSeed::class);
        $this->call(PostSeed::class);
        $this->call(CorparatePageSeed::class);
        $this->call(ServicesPageSeed::class);
    }
}
