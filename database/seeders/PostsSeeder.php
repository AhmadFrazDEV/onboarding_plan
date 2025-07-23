<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\posts;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        posts::create([
            'name' => 'Ahmad',
            'des' => 'Hello world',
            'age' => 19
        ]);
        posts::create([
            'name' => 'Faraz',
            'des' => 'Hello world',
            'age' => 19
        ]);
        posts::create([
            'name' => 'Saeed',
            'des' => 'Hello world',
            'age' => 19
        ]);
        posts::create([
            'name' => 'Akhat',
            'des' => 'Hello world',
            'age' => 19
        ]);
        posts::create([
            'name' => 'Ali',
            'des' => 'Hello world',
            'age' => 19
        ]);
    }
}
