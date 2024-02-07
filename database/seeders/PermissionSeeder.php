<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Database\Factories\PermissionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::factory()->has(Role::factory())->count(2)->create();
    }
}
