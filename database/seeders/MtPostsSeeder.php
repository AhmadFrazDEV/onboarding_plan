<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mtPosts;

use Faker\Factory as Faker;
class MtPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        for ($i = 0 ; $i < 15 ; $i++)
        {
            mtPosts::create([
                'name' => $fake->name,
                'des' => $fake->sentence
            ]);
        }
    }
}
