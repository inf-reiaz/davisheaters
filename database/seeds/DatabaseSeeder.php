<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(AboutUsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(PartnerImagesTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(VisitorTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
