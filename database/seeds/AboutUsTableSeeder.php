<?php

use Illuminate\Database\Seeder;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutuses')->insert([
            [
                'id'            => 1,
                'user_id'       => 1,
                'photo'         => 'AboutUsLogo.svg',
                'body'      => 'For over 40 years we’ve supplied heaters and controls systems for our customers’ unique applications. Our efforts, combined with the diversity of solutions that we’ve developed, have allowed us to forge trustworthy relationships with all our principals in solving, often complex, process problems with exacting and efficient solutions. While we attempt to solve application issues using standard off-the-shelf products (to minimize costs), some of these processes have required us to design and build bespoke systems with our principals. We have been instrumental in developing new products for our principals that have proven be very successful. In recent years we’ve noticed a marked shift in the types of material being used across industries in efforts to reduce material and manufacturing cost while improving final product capabilities and specifications. Recognizing this trend we have helped numerous companies with their efforts in developing new manufacturing processes with innovative process controllers and sensors.',
            ]
            
        ]);
    }
}
