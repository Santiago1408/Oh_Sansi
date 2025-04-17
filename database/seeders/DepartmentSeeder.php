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
            ['name' => 'La Paz'],
            ['name' => 'Cochabamba'],
            ['name' => 'Santa Cruz'],
            ['name' => 'Oruro'],
            ['name' => 'Potosí'],
            ['name' => 'Chuquisaca'],
            ['name' => 'Tarija'],
            ['name' => 'Beni'],
            ['name' => 'Pando'],
        ];

        foreach ($departments as $department) {
            Department::firstOrCreate(['name' => $department['name']], $department);
        }
    }
}
