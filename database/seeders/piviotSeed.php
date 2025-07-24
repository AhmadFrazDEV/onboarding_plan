<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\posts;
use App\Models\tags;
use Faker\Factory as Faker;

class piviotSeed extends Seeder
{
    public function run()
    {
        $fake = Faker::create();
        $posts = posts::all();

        dump("Total Posts: " . $posts->count());

        $tagsId = tags::pluck('id')->toArray();

        foreach($posts as $post)
        {
            dump("Post Title: " . $post->title);

            $randomIdtag = $fake->randomElements($tagsId, 2);
            $post->tags()->attach($randomIdtag);
        }
    }
}

