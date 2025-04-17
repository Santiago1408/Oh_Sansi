<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['department' => 'La Paz', 'name' => 'Murillo'],
            ['department' => 'La Paz', 'name' => 'Ingavi'],
            ['department' => 'Cochabamba', 'name' => 'Quillacollo'],
            ['department' => 'Cochabamba', 'name' => 'Chapare'],
            ['department' => 'Santa Cruz', 'name' => 'Andrés Ibáñez'],
            ['department' => 'Santa Cruz', 'name' => 'Warnes'],
            ['department' => 'Oruro', 'name' => 'Cercado'],
            ['department' => 'Oruro', 'name' => 'Pantaleón Dalence'],
            ['department' => 'Potosí', 'name' => 'Tomás Frías'],
            ['department' => 'Potosí', 'name' => 'Nor Chichas'],
            ['department' => 'Chuquisaca', 'name' => 'Oropeza'],
            ['department' => 'Chuquisaca', 'name' => 'Zudáñez'],
            ['department' => 'Tarija', 'name' => 'Cercado'],
            ['department' => 'Tarija', 'name' => 'Gran Chaco'],
            ['department' => 'Beni', 'name' => 'Moxos'],
            ['department' => 'Beni', 'name' => 'Cercado'],
            ['department' => 'Pando', 'name' => 'Madre de Dios'],
            ['department' => 'Pando', 'name' => 'Manuripi'],
        ];

        foreach ($provinces as $province) {
            $department = Department::where('name', $province['department'])->first();
            if ($department) {
                Province::firstOrCreate(
                    ['name' => $province['name'], 'department_id' => $department->id],
                    ['name' => $province['name']]
                );
            }
        }
    }
}
