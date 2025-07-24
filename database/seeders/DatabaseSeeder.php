<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(TestModelSeeder::class);
        // $this->call(MtPostsSeeder::class);

        // $this->call(myposts::class);
        // $this->call(tags::class);
        // $this->call(piviot_seed::class);

        $this->call([
            PostsSeeder::class,
            TagsSeeder::class,
            piviotSeed::class
        ]);


    }
}
