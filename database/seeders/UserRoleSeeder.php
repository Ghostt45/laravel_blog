<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        UserRole::create(['role_name' => 'user']);
        UserRole::create(['role_name' => 'admin']);
        UserRole::create(['role_name' => 'superAdmin']);
    }
}
