<?php

namespace Database\Seeders;

use App\Models\Olympic;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OlympicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $olympics = [
            [
                'name' => 'Olimpiadas Científicas Nacionales O! SANSI 2024',
                'description' => 'Convocatoria a los estudiantes del Sistema de Educación Regular.',
                'date_ini' => Carbon::parse('2024-05-15'),
                'date_fin' => Carbon::parse('2024-06-15'),
            ],
            [
                'name' => 'Olimpiadas Matemáticas O! SANSI 2024',
                'description' => 'Competencia de matemáticas para estudiantes de secundaria.',
                'date_ini' => Carbon::parse('2024-06-10'),
                'date_fin' => Carbon::parse('2024-07-10'),
            ],
            [
                'name' => 'Olimpiadas de Informática O! SANSI 2024',
                'description' => 'Competencia enfocada en programación y lógica computacional.',
                'date_ini' => Carbon::parse('2024-07-20'),
                'date_fin' => Carbon::parse('2024-08-20'),
            ],
            [
                'name' => 'Olimpiadas de Ciencias Naturales O! SANSI 2024',
                'description' => 'Competencia en biología, química y física.',
                'date_ini' => Carbon::parse('2024-08-05'),
                'date_fin' => Carbon::parse('2024-09-05'),
            ],
        ];

        foreach ($olympics as $olympic) {
            Olympic::firstOrCreate(['name' => $olympic['name']], $olympic);
        }

    }
}
