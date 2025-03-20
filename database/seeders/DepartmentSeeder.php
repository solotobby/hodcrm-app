<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'Prayer'],
            ['name' => 'Follow-Up'],
            ['name' => 'Evangelism'],
            ['name' => 'Greeters']
        ];

        foreach($departments as $dep){
            Department::create($dep);
        }
    }
}
