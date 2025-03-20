<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'root',
        //     'role_id' => '3',
        //     'email' => 'root@gmail.com',
        //     'password' => bcrypt('123123123'),
        // ]);

        $this->call(UserRoleSeeder::class);

        User::create([
            'name' => 'root',
            'role_id' => '3',
            'email' => 'root@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
        User::create([
            'name' => 'user',
            'role_id' => '1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
        User::create([
            'name' => 'admin',
            'role_id' => '2',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
    }
}
