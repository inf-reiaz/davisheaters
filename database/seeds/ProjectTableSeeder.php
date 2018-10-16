<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'id'                    => 1,
                'user_id'               => 1,
                'project_name'          => 'Kapton Flexible Heating',
                'owner_name'            => 'Rio',
                'date_of_completion'    => '2018-02-13 00:00:00',
                'body'                  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ',
                'photo'                 => 'main_post_one.jpg',
                'created_at'            => '2018-02-13 00:00:00',
            ],
            [
                'id'                    => 2,
                'user_id'               => 1,
                'project_name'          => 'Kapton Flexible Heating',
                'owner_name'            => 'Rio',
                'date_of_completion'    => '2018-02-13 00:00:00',
                'body'                  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ',
                'photo'                 => 'main_post_one.jpg',
                'created_at'            => '2018-02-13 00:00:00',
            ],
            [
                'id'                    => 3,
                'user_id'               => 1,
                'project_name'          => 'Kapton Flexible Heating',
                'owner_name'            => 'Rio',
                'date_of_completion'    => '2018-02-13 00:00:00',
                'body'                  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ',
                'photo'                 => 'main_post_one.jpg',
                'created_at'            => '2018-02-13 00:00:00',
            ],
            [
                'id'                    => 4,
                'user_id'               => 1,
                'project_name'          => 'Kapton Flexible Heating',
                'owner_name'            => 'Rio',
                'date_of_completion'    => '2018-02-13 00:00:00',
                'body'                  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ',
                'photo'                 => 'main_post_one.jpg',
                'created_at'            => '2018-02-13 00:00:00',
            ],
            
        ]);
    }
}
