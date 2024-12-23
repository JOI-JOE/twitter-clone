<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
           'name' => 'Gwen',
           'handle' => '@gwen',
           'image' => 'https://images-eu.ssl-images-amazon.com/images/I/51Tf8lHm9zL._AC_US218_.jpg',
           'tweet' => 'We went rock climbing this weekend? Here is the video/ Climbing is way more fun',
           'file' => 'videos/gwen.mp4',
           'is_video' => true,
           'comments' => '35',
           'retweets' => '54',
           'likes' => '88',
           'analytics' => '81',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);

         DB::table('tweets')->insert([
            'name' => 'Gwen',
            'handle' => '@gwen',
            'image' => 'https://images-eu.ssl-images-amazon.com/images/I/51Tf8lHm9zL._AC_US218_.jpg',
            'tweet' => 'We went rock climbing this weekend? Here is the video/ Climbing is way more fun',
            'file' => 'videos/gwen.mp4',
            'is_video' => true,
            'comments' => '35',
            'retweets' => '54',
            'likes' => '88',
            'analytics' => '81',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


    }
}
