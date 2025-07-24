<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tags;
use Faker\factory as Faker;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();

        for ( $i = 0 ; $i < 15 ;$i++)
        {
            tags::create([
                'name' => $fake->name
            ]);
        }
    }
}
