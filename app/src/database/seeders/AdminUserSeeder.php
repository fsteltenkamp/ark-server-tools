<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo 'AdminUserSeeder: Running...' . PHP_EOL;
        if (!User::where('email', 'admin@ark-server.tools')->exists()) {
            User::factory()->create([
                'name' => 'Administrator',
                'email' => 'admin@ark-server.tools',
                'password' => bcrypt('admin'),
            ]);
            # check if the user was created successfully
            if (User::where('email', 'admin@ark-server.tools')->exists()) {
                echo 'AdminUserSeeder: Admin user created successfully.' . PHP_EOL;
            } else {
                echo 'AdminUserSeeder: Failed to create admin user.' . PHP_EOL;
            }
        } else {
            echo 'AdminUserSeeder: Admin user already exists. Skipping creation.' . PHP_EOL;
        }
    }
}
