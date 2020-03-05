<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

$comment = \App\Comment::create([
    'user_id' => '1',
    'post_id' => '2',
    'comment' => 'How much does the apartment cost'
]);

$comment = \App\Comment::create([
    'user_id' => '3',
    'post_id' => '2',
    'comment' => 'The price for the third floor'
]);

$comment = \App\Comment::create([
    'user_id' => '4',
    'post_id' => '2',
    'comment' => 'The price for the fourth floor'
]);


$comment = \App\Comment::create([
    'user_id' => '1',
    'post_id' => '1',
    'comment' => 'How much is car'
]);


$comment = \App\Comment::create([
    'user_id' => '4',
    'post_id' => '1',
    'comment' => 'car is expensive'
]);

$comment = \App\Comment::create([
    'user_id' => '2',
    'post_id' => '1',
    'comment' => 'car is very beautiful'
]);

$comment = \App\Comment::create([
    'user_id' => '3',
    'post_id' => '1',
    'comment' => 'if the price for car is 250000 , will buy it'
]);

$comment = \App\Comment::create([
    'user_id' => '1',
    'post_id' => '3',
    'comment' => 'How much is phone'
]);

$comment = \App\Comment::create([
    'user_id' => '2',
    'post_id' => '3',
    'comment' => 'good'
]);

$comment = \App\Comment::create([
    'user_id' => '4',
    'post_id' => '4',
    'comment' => 'How much is  laptop'
]);

$comment = \App\Comment::create([
    'user_id' => '3',
    'post_id' => '6',
    'comment' => 'nice'
]);

$comment = \App\Comment::create([
    'user_id' => '2',
    'post_id' => '5',
    'comment' => 'very nice'
]);

$comment = \App\Comment::create([
    'user_id' => '4',
    'post_id' => '7',
    'comment' => 'nice'
]);

$comment = \App\Comment::create([
    'user_id' => '2',
    'post_id' => '7',
    'comment' => 'good'
]);

    }
}
