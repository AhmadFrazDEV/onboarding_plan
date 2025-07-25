<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('email', 'admin@example.com')->first();
        $user = User::where('email', 'user@example.com')->first();
        $editor = User::where('email', 'editor@example.com')->first();
        $manager = User::where('email', 'manager@example.com')->first();

        $roleAdmin = Role::where('name', 'admin')->first();
        $roleUser = Role::where('name', 'user')->first();
        $roleEditor = Role::where('name', 'editor')->first();

        // Attach multiple roles to users
        if ($admin && $roleAdmin && $roleEditor) {
            DB::table('role_user')->insert([
                'user_id' => $admin->id,
                'role_id' => $roleAdmin->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('role_user')->insert([
                'user_id' => $admin->id,
                'role_id' => $roleEditor->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        if ($user && $roleUser) {
            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => $roleUser->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        if ($editor && $roleEditor) {
            DB::table('role_user')->insert([
                'user_id' => $editor->id,
                'role_id' => $roleEditor->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        if ($manager && $roleUser) {
            DB::table('role_user')->insert([
                'user_id' => $manager->id,
                'role_id' => $roleUser->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
