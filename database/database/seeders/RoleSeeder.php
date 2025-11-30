<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
            'permissions' => [
                'manage_users' => true,
                'manage_classes' => true,
                'view_reports' => true,
            ],
        ]);
        Role::create([
            'name' => 'Teacher',
            'permissions' => [
                'manage_users' => false,
                'manage_classes' => true,
                'view_reports' => true,
            ],
        ]);
        Role::create([
            'name' => 'Parent',
            'permissions' => [
                'manage_users' => false,
                'manage_classes' => false,
                'view_reports' => false,
            ],
        ]);
        Role::create([
            'name' => 'Staff',
            'permissions' => [
                'manage_users' => false,
                'manage_classes' => true,
                'view_reports' => false,
            ],
        ]);
    }
}
