<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $post = App\Post::create([
            'title' => 'Rang',
            'content' => 'Made In Germany ,Model car year I walked 80 km selling to travel Open in Google Translate',
            'user_id' => '1',
            'category_id'  => '1',
            'image'  => 'car.jpg',
            'location' => 'Alex'
        ]);

        $post = App\Post::create([
            'title' => 'Bilud',
            'content' => 'ram 8Gh , rom 64Gh ,screen 6.5pixels, camera 18mp , 8mp , android 8.1.0 and color blue',
            'user_id' => '3',
            'category_id'  => '5',
            'image'  => 'biluding.jpeg',
            'location' => 'cairo'
        ]);


        $post = App\Post::create([
            'title' => 'oppo',
            'content' => 'ram 8Gh , rom 64Gh ,screen 6.5pixels, camera 18mp , 8mp , android 8.1.0 and color blue',
            'user_id' => '1',
            'category_id'  => '2',
            'image'  => 'phone.jpeg',
            'location' => 'Mansourah'
        ]);

        $post = App\Post::create([
            'title' => 'laptop',
            'content' => 'ram 4gh ,harddisk 500gh ,cardscreen 2nevadi, 2 intel ,weight 1.5k and price 5000',
            'user_id' => '3',
            'category_id'  => '2',
            'image'  => 'laptop.jpeg',
            'location' => 'Mansourah'
        ]);

        $post = App\Post::create([
            'title' => 'bird',
            'content' => 'color red and blue and green age 5months',
            'user_id' => '4',
            'category_id'  => '3',
            'image'  => 'bird.jpeg',
            'location' => 'Tanta'
        ]);

        $post = App\Post::create([
            'title' => 'sofa',
            'content' => 'Sofa for sales',
            'user_id' => '3',
            'category_id'  => '4',
            'image'  => 'download.jpg',
            'location' => 'cairo'
        ]);

        $post = App\Post::create([
            'title' => 'Cats',
            'content' => ' Cat for sales age 3months color gray and wihte',
            'user_id' => '2',
            'category_id'  => '3',
            'image'  => 'cats.jpg',
            'location' => 'cairo'
        ]);

    }
}
