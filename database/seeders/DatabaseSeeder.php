<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        User::factory()->create([
            'name' => 'Adha Noer H',
            'username' => 'AdhaNoer4',
            'email' => 'adhanoer@gmail.com',
            'password' => '12345'
        ]);

        Category::factory()->create([
            'name' => 'Matematika',
            'slug' => 'matematika'
        ]);

        Category::factory()->create([
            'name' => 'Bahasa Indonesia',
            'slug' => 'bahasa-indonesia'
        ]);

        Category::factory()->create([
            'name' => 'Bahasa Inggris',
            'slug' => 'bahasa-inggris'
        ]);
    }
}
