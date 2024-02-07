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
        for ( $i=8;$i<20;$i+=2){  //open from 8 am to 8pm?
            \App\Models\Timeslot::factory()->create(['time'=>$i]);
        }
        \App\Models\User::factory()->create(
            ['name' => 'Pieter',
            'email' => 'Pieter@gmail.com',
            'password'=>'test123',]);
        \App\Models\User::factory()->create(
            ['name' => 'Alex',
            'email' => 'Alex@gmail.com',
            'password'=>'test123']);
        \App\Models\User::factory()->create(
            ['name' => 'Thierry',
            'email' => 'Thierry@gmail.com',
            'password'=>'test123',]);          
        \App\Models\User::factory()->create(
            ['name' => 'Example',
            'email' => 'Example@gmail.com',
            'password'=>'Example',]);          
            \App\Models\User::factory()->create(
            ['name' => 'test',
            'email' => 'test@gmail.com',
            'password'=>'123',]);          
    }
}
