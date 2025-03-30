<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['id' => 1, 'name'=>'Oluwatobi Solomon', 'email' => 'solotob3@gmail.com', 'phone' => '07774276007', 'password' => bcrypt(env('ADMIN_PASSWORD'))],
            ['id' => 2, 'name'=>'David Diken', 'email' => 'davidiken@gmail.com', 'phone' => '08073667462', 'password' => bcrypt(env('ADMIN_PASSWORD'))],
            ['id' => 3, 'name'=>'House Hold of David', 'email' => 'hod@gmail.com', 'phone' => '0802388472', 'password' => bcrypt(env('ADMIN_PASSWORD'))],
        ];

        $role = Role::where('name', 'system')->first();

        foreach($users as $user){
            $regUser = User::create($user);
            $regUser->assignRole($role->id);
        }
    }
}
