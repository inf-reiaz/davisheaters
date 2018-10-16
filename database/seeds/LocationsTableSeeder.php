<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
                'id'            => 1,
                'user_id'       => 1,
                'company_name'  => 'Douglas Davis',
                'p_o'           => 'P.O. Box 6263 ',
                'address'       => 'Cape Elizabeth, ME 04107',
                'info'          => 'info@davisheaters.com ',
                'phone'         => '508 849 3990',
                'button1'       => 'Request a Design Consultation',
                'button1_link'  => '#',
                'button2'       => 'Request a Quote',
                'button2_link'  => '#',
                'button3'       => 'Ask Question',
                'button3_link'  => '#',
            ]
        ]);
    }
}
