<?php

namespace Database\Seeders;

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

        \App\Models\User::factory()->create([
            'first_name' => 'admin',
            'middle_name' => '',
            'last_name' => '',
            'address' => '',
            'contact_number' => '',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => '2'
        ]);
        
        \App\Models\User::factory()->create([
            'first_name' => 'doctor',
            'middle_name' => '',
            'last_name' => '',
            'address' => '',
            'contact_number' => '',
            'email' => 'doctor@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => '1'
        ]);

        \App\Models\User::factory()->create([
            'first_name' => 'client',
            'middle_name' => '',
            'last_name' => '',
            'address' => '',
            'contact_number' => '',
            'email' => 'client@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => '0'
        ]);
    }
}
