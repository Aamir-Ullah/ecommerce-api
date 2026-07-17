<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Role::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $roles = [
            [
                "name" => "super_admin",
            ],
            [
                "name" => "admin",
            ],
            [
                "name" => "customer"
            ]

        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
