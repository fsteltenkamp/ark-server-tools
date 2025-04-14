<?php
namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'user:create-admin {--force : Force the operation to run without confirmation}';

    /**
     * The console command description.
     */
    protected $description = 'Create an admin user if it does not already exist';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        if (User::where('email', 'admin@ark-server.tools')->exists()) {
            if ($this->option('force')) {
                User::where('email', 'admin@ark-server.tools')->delete();
                $this->info('Existing admin user deleted.');
            } else {
                $this->info('Admin user already exists. Skipping creation.');
                return Command::SUCCESS;
            }
        }

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@ark-server.tools',
            'password' => Hash::make('admin'), // Use a secure password in production
        ]);

        $this->info('Admin user created successfully.');
        return Command::SUCCESS;
    }
}