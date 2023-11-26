<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\EmployeeSeeder;
use Illuminate\Foundation\Auth\User;
use Database\Seeders\SupervisorSeeder;
use Database\Seeders\AdministratorSeeder;
use Database\Seeders\RelationPresenceSeeder;

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
        $this->call([
            EmployeeSeeder::class,
            AdministratorSeeder::class,
            SupervisorSeeder::class,
            UsersSeeder::class,
            RelationPresenceSeeder::class,
        ]);

    }
}