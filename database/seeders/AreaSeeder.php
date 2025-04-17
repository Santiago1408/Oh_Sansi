<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['name' => 'ASTRONOMÍA - ASTROFÍSICA', 'description' => 'Competencias de Astronomía y Astrofísica', 'price' => 100],
            ['name' => 'BIOLOGÍA', 'description' => 'Competencias de Biología', 'price' => 100],
            ['name' => 'FÍSICA', 'description' => 'Competencias de Física', 'price' => 100],
            ['name' => 'INFORMÁTICA', 'description' => 'Competencias de Informática', 'price' => 100],
            ['name' => 'MATEMÁTICAS', 'description' => 'Competencias de Matemáticas', 'price' => 100],
            ['name' => 'QUÍMICA', 'description' => 'Competencias de Química', 'price' => 100],
            ['name' => 'ROBÓTICA', 'description' => 'Competencias de Robótica', 'price' => 100],
        ];

        foreach ($areas as $area) {
            Area::firstOrCreate(['name' => $area['name']], $area);
        }
    }
}
