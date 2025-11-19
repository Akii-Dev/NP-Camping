<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Spot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $newAdmins = 2;
        $newCustomers = 5;
        $spots = 20;

        User::factory($newAdmins)->hasAdmin()->create([
            'role' => 'admin',
        ]);

        User::factory($newCustomers)->hasCustomer()->create([
            'role' => 'customer',
        ]);

        

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        Spot::factory($spots)->create();
    }
}
