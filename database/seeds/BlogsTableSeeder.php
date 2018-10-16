<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'id'            => 1,
                'user_id'       => 1,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'meta_tages'    => 'HTML,CSS,XML,JavaScript',
                'photo'         => 'main_post_one.jpg',
                'homepage'      => 'Yes',
                'view_count'      => '11',
                'created_at'      => '2018-02-13 00:00:00',
            ],
            [
                'id'            => 2,
                'user_id'       => 1,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'meta_tages'    => 'HTML,CSS,XML,JavaScript',
                'photo'         => 'main_post_one.jpg',
                'homepage'      => 'Yes',
                'view_count'      => '11',
                'created_at'      => '2018-02-13 00:00:00',
            ],
            [
                'id'            => 3,
                'user_id'       => 1,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'meta_tages'    => 'HTML,CSS,XML,JavaScript',
                'photo'         => 'main_post_one.jpg',
                'homepage'      => 'Yes',
                'view_count'      => '11',
                'created_at'      => '2018-02-13 00:00:00',
            ],
            [
                'id'            => 4,
                'user_id'       => 1,
                'title'         => 'Kapton Flexible Heating',
                'body'          => 'Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ',
                'meta_tages'    => 'HTML,CSS,XML,JavaScript',
                'photo'         => 'main_post_one.jpg',
                'homepage'      => 'Yes',
                'view_count'      => '11',
                'created_at'      => '2018-02-13 00:00:00',
            ],
            
        ]);
    }
}
