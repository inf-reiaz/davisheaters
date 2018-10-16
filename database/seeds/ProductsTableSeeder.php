<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'            => 1,
                'user_id'       => 1,
                'category_id'   => 1,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'photo1'        => 'ProductOne-Left.jpg',
                'photo2'        => 'ProductOne-Left.jpg',
                'photo3'        => 'ProductOne-Left.jpg',
            ],
            [
                'id'            => 2,
                'user_id'       => 1,
                'category_id'   => 2,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'photo1'        => 'ProductOne-Left.jpg',
                'photo2'        => 'ProductOne-Left.jpg',
                'photo3'        => 'ProductOne-Left.jpg',
            ],
            [
                'id'            => 3,
                'user_id'       => 1,
                'category_id'   => 3,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'photo1'        => 'ProductOne-Left.jpg',
                'photo2'        => 'ProductOne-Left.jpg',
                'photo3'        => 'ProductOne-Left.jpg',
            ],
            [
                'id'            => 4,
                'user_id'       => 1,
                'category_id'   => 4,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'photo1'        => 'ProductOne-Left.jpg',
                'photo2'        => 'ProductOne-Left.jpg',
                'photo3'        => 'ProductOne-Left.jpg',
            ],
            
        ]);
    }
}
