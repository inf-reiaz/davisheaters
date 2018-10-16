<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'                => 1,
                'user_image'        => '/public/front/images/blog/userPhoto.png',
                'firstname'         => 'Abdul Halim ',
                'lastname'          => 'Reiaz',
                'username'          => 'ahreiaz',
                'email'             => 'reiazbubt@gmail.com',
                'password'          => bcrypt('1234'),
                'role'              => 'admin',
                'active'            => '1',
                'created_at'        => '2018-02-04 00:00:00',
            ],
            [
                'id'                => 2,
                'user_image'        => '/public/admin/users/me.jpg',
                'firstname'         => 'Khalid',
                'lastname'          => 'Md',
                'username'          => 'kd',
                'email'             => 'kd@gmail.com',
                'password'          => bcrypt('1234'),
                'role'              => 'admin',
                'active'            => '0',
                'created_at'        => '2018-02-04 00:00:00',
            ]
            
        ]);
    }
}
