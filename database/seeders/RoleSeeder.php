<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'system', 'guard_name' => 'web'],
            ['name' => 'senior_pastor', 'guard_name' => 'web'],
            ['name' => 'head_of_ministries', 'guard_name' => 'web'],
            ['name' => 'pastor', 'guard_name' => 'web'],
            ['name' => 'director', 'guard_name' => 'web'],
            ['name' => 'hod', 'guard_name' => 'web'],
            ['name' => 'worker', 'guard_name' => 'web'],
            ['name' => 'member', 'guard_name' => 'web'],
            ['name' => 'user', 'guard_name' => 'web'],
        ];
        foreach($roles as $role){
            Role::create($role);
        }
     
    }
}
