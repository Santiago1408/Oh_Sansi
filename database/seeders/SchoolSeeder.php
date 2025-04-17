<?php

namespace Database\Seeders;

use App\Models\Province;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            ['province' => 'Murillo', 'name' => 'Colegio San Ignacio'],
            ['province' => 'Murillo', 'name' => 'Colegio Saint Andrew’s'],
            ['province' => 'Ingavi', 'name' => 'Colegio Gran Mariscal'],
            ['province' => 'Quillacollo', 'name' => 'Colegio Tiquipaya'],
            ['province' => 'Quillacollo', 'name' => 'Colegio San Agustín'],
            ['province' => 'Chapare', 'name' => 'Colegio 12 de Abril'],
            ['province' => 'Andrés Ibáñez', 'name' => 'Colegio Alemán'],
            ['province' => 'Andrés Ibáñez', 'name' => 'Colegio La Salle'],
            ['province' => 'Warnes', 'name' => 'Colegio Adventista'],
        ];

        foreach ($schools as $school) {
            $province = Province::where('name', $school['province'])->first();
            if ($province) {
                School::firstOrCreate(
                    ['name' => $school['name'], 'province_id' => $province->id],
                    ['name' => $school['name']]
                );
            }
        }
    }
}
