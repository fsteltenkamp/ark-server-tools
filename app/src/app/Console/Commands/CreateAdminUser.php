<?php
namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
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
        $this->info('Creating Admin Role if it does not exist...');
        if (!Role::where('guard_name', 'superadmin')) {
            Role::create([
                'displayname' => 'Super Administrator',
                'description' => 'Has Access to all features and settings'
            ])->syncPermissions(Permission::all());
        }

        if (User::where('email', 'admin@ark-server.tools')->exists()) {
            if ($this->option('force')) {
                $u = User::where('email', 'admin@ark-server.tools')->first();
                $u->password = Hash::make('admin');
                $u->setRole('superadmin');
                $u->save();
                $this->info('Admin user restored successfully.');
                return Command::SUCCESS;
            } else {
                $this->info('Admin user already exists. Skipping creation.');
                return Command::SUCCESS;
            }
        }

        $u = User::create([
            'name' => 'Administrator',
            'email' => 'admin@ark-server.tools',
            'password' => Hash::make('admin'), // Use a secure password in production
        ]);
        $u->setRole('superadmin');
        $u->save();

        $this->info('Admin user created successfully.');
        return Command::SUCCESS;
    }
}