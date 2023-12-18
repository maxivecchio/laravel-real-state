<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('userpass'),
            'role_id' => 1,
            'remember_token' => null,
            'email_verified_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpass'),
            'role_id' => 2,
            'remember_token' => null,
            'email_verified_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
