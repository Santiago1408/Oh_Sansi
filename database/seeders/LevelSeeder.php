<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            ['name' => '3P', 'description' => '3ro Primaria'],
            ['name' => '4P', 'description' => '4to Primaria'],
            ['name' => '5P', 'description' => '5to Primaria'],
            ['name' => '6P', 'description' => '6to Primaria'],
            ['name' => '1S', 'description' => '1ro Secundaria'],
            ['name' => '2S', 'description' => '2do Secundaria'],
            ['name' => '3S', 'description' => '3ro Secundaria'],
            ['name' => '4S', 'description' => '4to Secundaria'],
            ['name' => '5S', 'description' => '5to Secundaria'],
            ['name' => '6S', 'description' => '6to Secundaria'],
            ['name' => 'Guacamayo', 'description' => '5to a 6to Primaria'],
            ['name' => 'Guanaco', 'description' => '1ro a 3ro Secundaria'],
            ['name' => 'Londra', 'description' => '1ro a 3ro Secundaria'],
            ['name' => 'Jucumari', 'description' => '4to a 6to Secundaria'],
            ['name' => 'Bufeo', 'description' => '1ro a 3ro Secundaria'],
            ['name' => 'Puma', 'description' => '4to a 6to Secundaria'],
            ['name' => 'Primer Nivel', 'description' => '1ro Secundaria'],
            ['name' => 'Segundo Nivel', 'description' => '2do Secundaria'],
            ['name' => 'Tercer Nivel', 'description' => '3ro Secundaria'],
            ['name' => 'Cuarto Nivel', 'description' => '4to Secundaria'],
            ['name' => 'Quinto Nivel', 'description' => '5to Secundaria'],
            ['name' => 'Sexto Nivel', 'description' => '6to Secundaria'],
            ['name' => 'Builders P', 'description' => '5to a 6to Primaria'],
            ['name' => 'Builders S', 'description' => '1ro a 6to Secundaria'],
            ['name' => 'Lego P', 'description' => '5to a 6to Primaria'],
            ['name' => 'Lego S', 'description' => '1ro a 6to Secundaria'],
        ];

        foreach ($levels as $level) {
            Level::firstOrCreate(['name' => $level['name']], ['description' => $level['description']]);
        }
    }
}
