<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\test_model;

class TestModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        test_model::create(
            [
                'name' => 'Ahmad',
                'Massage' => 'Hello world'
            ]
            );
            
    }
}
