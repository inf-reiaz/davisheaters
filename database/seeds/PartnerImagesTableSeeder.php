<?php

use Illuminate\Database\Seeder;

class PartnerImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partner_images')->insert([
            ['id'                => 1, 'partner_image'     => 'PartnersLogo_1.svg',],
            ['id'                => 2, 'partner_image'     => 'PartnersLogo_2.svg',],
            ['id'                => 3, 'partner_image'     => 'PartnersLogo_3.svg',],
            ['id'                => 4, 'partner_image'     => 'PartnersLogo_4.svg',],
            ['id'                => 5, 'partner_image'     => 'PartnersLogo_5.svg',],
            ['id'                => 6, 'partner_image'     => 'PartnersLogo_6.svg',],
            
        ]);
    }
}
