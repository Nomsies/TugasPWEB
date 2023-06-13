<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::create([
            'role' => 'admin',
        ]);

        Role::create([
            'role' => 'user',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Reza Octa Fahlevi',
            'email' => 'rezaocta@mail.com',
            'password' => bcrypt('3007'),
            'role_id' => 1,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Syahrul Ridwan',
            'email' => 'syahrul@mail.com',
            'password' => bcrypt('3085'),
            'role_id' => 2,
        ]);
    }
}
