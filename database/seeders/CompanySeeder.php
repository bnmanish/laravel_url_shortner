<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::insert([
            ['name' => 'Google'],
            ['name' => 'Microsoft'],
            ['name' => 'Amazon'],
            ['name' => 'Apple'],
            ['name' => 'Meta'],
        ]);
    }
}