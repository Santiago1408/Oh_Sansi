<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $grades = [
            ['name' => '3ro Primaria', 'description' => 'Grado correspondiente a 3ro de Primaria'],
            ['name' => '4to Primaria', 'description' => 'Grado correspondiente a 4to de Primaria'],
            ['name' => '5to Primaria', 'description' => 'Grado correspondiente a 5to de Primaria'],
            ['name' => '6to Primaria', 'description' => 'Grado correspondiente a 6to de Primaria'],
            ['name' => '1ro Secundaria', 'description' => 'Grado correspondiente a 1ro de Secundaria'],
            ['name' => '2do Secundaria', 'description' => 'Grado correspondiente a 2do de Secundaria'],
            ['name' => '3ro Secundaria', 'description' => 'Grado correspondiente a 3ro de Secundaria'],
            ['name' => '4to Secundaria', 'description' => 'Grado correspondiente a 4to de Secundaria'],
            ['name' => '5to Secundaria', 'description' => 'Grado correspondiente a 5to de Secundaria'],
            ['name' => '6to Secundaria', 'description' => 'Grado correspondiente a 6to de Secundaria'],
        ];

        foreach ($grades as $grade) {
            Grade::firstOrCreate(['name' => $grade['name']], ['description' => $grade['description']]);
        }
    }
}
