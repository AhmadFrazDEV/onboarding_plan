<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@example.com'], [
            'name' => 'John',
            'password' => Hash::make('password'),
        ]);
        User::updateOrCreate([
            'email' => 'user@example.com'], [
            'name' => 'Micheal',
            'password' => Hash::make('password'),
        ]);
        User::updateOrCreate([
            'email' => 'editor@example.com'], [
            'name' => 'Jebreal',
            'password' => Hash::make('password'),
        ]);
        User::updateOrCreate([
            'email' => 'manager@example.com'], [
            'name' => 'Joseph',
            'password' => Hash::make('password'),
        ]);
    }
}
