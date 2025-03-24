<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'root',
            'role_id' => \App\Models\UserRole::where('role_name', 'superAdmin')->value('id'),
            'email' => 'root@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
        User::create([
            'name' => 'user',
            'role_id' => \App\Models\UserRole::where('role_name', 'user')->value('id'),
            'email' => 'user@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
        User::create([
            'name' => 'admin',
            'role_id' => \App\Models\UserRole::where('role_name', 'admin')->value('id'),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
    }
}
