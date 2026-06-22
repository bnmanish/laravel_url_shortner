<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'developermanish95@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Super Admin',
            'company_id' => null,
            'email_verified_at' => now(),
        ]);
    }
}
