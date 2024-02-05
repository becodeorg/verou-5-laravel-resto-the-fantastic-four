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
        \App\Models\Table::factory(10)->create();
        \App\Models\Employee::factory()->create(
            ['name' => 'Pieter',
            'email' => 'Pieter@gmail.com',
            'password'=>'test123',]);
        \App\Models\Employee::factory()->create(
            ['name' => 'Alex',
            'email' => 'Alex@gmail.com',
            'password'=>'test123']);
        \App\Models\Employee::factory()->create(
            ['name' => 'Thierry',
            'email' => 'Thierry@gmail.com',
            'password'=>'test123',]);          
        \App\Models\Employee::factory()->create(
            ['name' => 'Example',
            'email' => 'Example@gmail.com',
            'password'=>'Example',]);          
    }
}
