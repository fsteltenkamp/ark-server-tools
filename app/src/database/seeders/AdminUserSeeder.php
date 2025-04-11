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
        if (!User::where('email', 'admin@ark-server.tools')->exists()) {
            User::factory()->create([
                'name' => 'Administrator',
                'email' => 'admin@ark-server.tools',
                'password' => bcrypt('admin'),
            ]);
        } else {
            echo 'Admin user already exists. Skipping creation.' . PHP_EOL;
        }
    }
}
