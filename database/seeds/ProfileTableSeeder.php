<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prof = \App\Profile::create([
            'user_id' => '1',
            'whatsapp' => '0123456789',
            'facebook' => 'www.mohamed.facebook',
            'address'  => 'mahalla',
            'job'      => 'student'
        ]);

        $prof = \App\Profile::create([
            'user_id' => '2',
            'whatsapp' => '0123456789',
            'facebook' => 'www.ali.facebook',
            'address'  => 'mansourah',
            'job'      => 'Doctor'
        ]);

        $prof = \App\Profile::create([
            'user_id' => '3',
            'whatsapp' => '0123456789',
            'facebook' => 'www.ahmed.facebook',
            'address'  => 'cairo',
            'job'      => 'Manager'
        ]);

        $prof = \App\Profile::create([
            'user_id' => '4',
            'whatsapp' => '0123456789',
            'facebook' => 'www.nourhan.facebook',
            'address'  => 'alex',
            'job'      => 'teacher'
        ]);
    }
}
