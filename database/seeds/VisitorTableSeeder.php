<?php

use Illuminate\Database\Seeder;

class VisitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitors')->insert([
            [
                'id'            => 1,
                'visitor'       => 'visitor',
                'count'         => '1',
            ]
        ]);
    }
}
