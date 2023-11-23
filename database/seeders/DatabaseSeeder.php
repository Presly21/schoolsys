<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::firstOrCreate([
            'name' => "Preshly",
            'email' => "admin@gmail.com",
            'password' => Hash::make('password'),
            'role_id' => 1,
            'role_name' => "admin"
        ]);
        Role::firstOrCreate([
            'name' => "proprietor",
            'display_name' => "Proprietor",
        ]);
        Role::firstOrCreate([
            'name' => "principal",
            'display_name' => "Principal",
        ]);
        Role::firstOrCreate([
            'name' => "bursar",
            'display_name' => "Bursar",
        ]);
        Role::firstOrCreate([
            'name' => "teacher",
            'display_name' => "Teacher",
        ]);
        Role::firstOrCreate([
            'name' => "student",
            'display_name' => "Student",
        ]);
        Role::firstOrCreate([
            'name' => "parent",
            'display_name' => "Parent",
        ]);
        Role::firstOrCreate([
            'name' => "admin",
            'display_name' => "Admin",
        ]);
    }
}
