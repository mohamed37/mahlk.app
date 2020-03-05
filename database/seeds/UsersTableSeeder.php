<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = \App\User::create([
                'name' => 'super',
                'fullname'  => 'mohamed mustafa elmeleeh',
                'email'		 => 'super_admin@app.com',
                'password' 	 => bcrypt('123456'),
                'image'      => 'default.jpg',
            ]);

            $user->attachRole('super_admin');

            $user = \App\User::create([

                'name' => 'ali',
                'fullname'  => 'Ali Ahmed Esmail',
                'email' => 'ali@app.com',
                'password' => bcrypt('123456789'),
                'image'  => 'ali.jpg'
            ]);

            $user = \App\User::create([

                'name' => 'ahmed',
                'fullname'  => 'Ahmed mohamed mustafa',
                'email' => 'ahmed@app.com',
                'password' => bcrypt('123456789'),
                'image'  => 'ahmed.jpg'
            ]);

            $user = \App\User::create([

                'name' => 'nourhan',
                'fullname'  => 'Nourhan  Mahmoud Eslam',
                'email' => 'nour@app.com',
                'password' => bcrypt('123456789'),
                'image'  => 'nourhan.jpg'
            ]);
    }
}
