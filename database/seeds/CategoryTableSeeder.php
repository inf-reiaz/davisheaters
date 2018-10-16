<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            
            [
                'id'            => 1,
                'name'      => 'Silicone Rubber Heaters',
                'body'      => 'Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.',
                'photo'         => '1.jpg',
            ],
            [
                'id'            => 2,
                'name'      => 'Kaptan Heaters',
                'body'      => 'Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as . It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.',
                'photo'         => '1.jpg',
            ],
            [
                'id'            => 3,
                'name'      => 'Industrial Tapes',
                'body'      => 'Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as . It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.',
                'photo'         => '1.jpg',
            ],
            [
                'id'            => 4,
                'name'      => 'Jackets & Blankets',
                'body'      => 'Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as . It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.',
                'photo'         => '1.jpg',
            ]
            
        ]);
    }
}
