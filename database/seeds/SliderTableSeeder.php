<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'id'            => 1,
                'user_id'       => 1,
                'photo'         => 'Slider_2.jpg',
                'headline'      => 'Kapton Flexible Heater',
                'paragraph'     => 'Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance',
                'button'        => 'See Details',
                'link'          => '#'
            ],
            [
                'id'            => 2,
                'user_id'       => 1,
                'photo'         => 'Slider_1.jpg',
                'headline'      => 'Kapton Flexible Heater',
                'paragraph'     => 'Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance',
                'button'        => 'See Details',
                'link'          => '#'
            ],
            [
                'id'            => 3,
                'user_id'       => 1,
                'photo'         => 'Slider_2.jpg',
                'headline'      => 'Kapton Flexible Heater',
                'paragraph'     => 'Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance',
                'button'        => 'See Details',
                'link'          => '#'
            ],
            [
                'id'            => 4,
                'user_id'       => 1,
                'photo'         => 'Slider_3.jpg',
                'headline'      => 'Kapton Flexible Heater',
                'paragraph'     => 'Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance',
                'button'        => 'See Details',
                'link'          => '#'
            ]
            
        ]);
    }
}
