<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory(10)->create();
        $pass = 789456123;
        $user = User::create([
            'username' => 'System Admin',
            'email' => 'system.admin@mailinator.com',
            'domains' => 'system,developer,dashboard,operator,support,manager',
            'type' => 'dashboard',
            'role' => 'system',
            'password' => bcrypt($pass),
        ]);


        $user = User::create([
            'username' => 'Support Admin',
            'email' => 'support.admin@mailinator.com',
            'domains' => 'support',
            'type' => 'support',
            'role' => 'admin',
            'password' => bcrypt($pass),
        ]);


        $user = User::create([
            'username' => 'Developer',
            'email' => 'developer@mailinator.com',
            'domains' => 'developer,dashboard,manager',
            'type' => 'dashboard',
            'role' => 'developer',
            'password' => bcrypt($pass),
        ]);

        $user = User::create([
            'username' => 'Admin',
            'email' => 'admin@mailinator.com',
            'domains' => 'dashboard,manager',
            'type' => 'dashboard',
            'role' => 'admin',
            'password' => bcrypt($pass),
        ]);


        $user = User::create([
            'username' => 'Account',
            'email' => 'account@mailinator.com',
            'domains' => 'account',
            'type' => 'account',
            'role' => 'account',
            'password' => bcrypt($pass),
        ]);


        $user = User::create([
            'username' => 'Shop Manager',
            'email' => 'shop.manager@mailinator.com',
            'domains' => 'manager',
            'type' => 'manager',
            'role' => 'manager',
            'password' => bcrypt($pass),
        ]);

        $user = User::create([
            'username' => 'Data Entry',
            'email' => 'data.entry@mailinator.com',
            'domains' => 'operator',
            'type' => 'operator',
            'role' => 'operator',
            'password' => bcrypt($pass),
        ]);


        $user = User::create([
            'username' => 'General Client',
            'email' => 'user@mailinator.com',
            'role' => 'user',
            'password' => bcrypt($pass),
        ]);
    }
}
