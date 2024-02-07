<?php

namespace Database\Seeders;

use App\Models\Art_project;
use App\Models\User;
use Database\Factories\Art_projectFactory;use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Art_projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Art_project::factory()->count(5)->create();
    }
}
