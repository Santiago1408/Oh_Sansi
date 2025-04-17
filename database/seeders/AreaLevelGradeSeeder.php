<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\AreaLevelGrade;
use App\Models\Grade;
use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaLevelGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $relations = [
            // ASTRONOMÍA - ASTROFÍSICA
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '3P', 'grade' => '3ro Primaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '4P', 'grade' => '4to Primaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '5P', 'grade' => '5to Primaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '6P', 'grade' => '6to Primaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '1S', 'grade' => '1ro Secundaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '2S', 'grade' => '2do Secundaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '3S', 'grade' => '3ro Secundaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '4S', 'grade' => '4to Secundaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '5S', 'grade' => '5to Secundaria'],
            ['area' => 'ASTRONOMÍA - ASTROFÍSICA', 'level' => '6S', 'grade' => '6to Secundaria'],

            // BIOLOGÍA
            ['area' => 'BIOLOGÍA', 'level' => '2S', 'grade' => '2do Secundaria'],
            ['area' => 'BIOLOGÍA', 'level' => '3S', 'grade' => '3ro Secundaria'],
            ['area' => 'BIOLOGÍA', 'level' => '4S', 'grade' => '4to Secundaria'],
            ['area' => 'BIOLOGÍA', 'level' => '5S', 'grade' => '5to Secundaria'],
            ['area' => 'BIOLOGÍA', 'level' => '6S', 'grade' => '6to Secundaria'],

            // FÍSICA
            ['area' => 'FÍSICA', 'level' => '4S', 'grade' => '4to Secundaria'],
            ['area' => 'FÍSICA', 'level' => '5S', 'grade' => '5to Secundaria'],
            ['area' => 'FÍSICA', 'level' => '6S', 'grade' => '6to Secundaria'],

            // INFORMÁTICA
            ['area' => 'INFORMÁTICA', 'level' => 'Guacamayo', 'grade' => '5to Primaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Guacamayo', 'grade' => '6to Primaria'],

            ['area' => 'INFORMÁTICA', 'level' => 'Guanaco', 'grade' => '1ro Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Guanaco', 'grade' => '2do Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Guanaco', 'grade' => '3ro Secundaria'],

            ['area' => 'INFORMÁTICA', 'level' => 'Londra', 'grade' => '1ro Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Londra', 'grade' => '2do Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Londra', 'grade' => '3ro Secundaria'],

            ['area' => 'INFORMÁTICA', 'level' => 'Jucumari', 'grade' => '4to Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Jucumari', 'grade' => '5to Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Jucumari', 'grade' => '6to Secundaria'],

            ['area' => 'INFORMÁTICA', 'level' => 'Bufeo', 'grade' => '1ro Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Bufeo', 'grade' => '2do Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Bufeo', 'grade' => '3ro Secundaria'],

            ['area' => 'INFORMÁTICA', 'level' => 'Puma', 'grade' => '4to Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Puma', 'grade' => '5to Secundaria'],
            ['area' => 'INFORMÁTICA', 'level' => 'Puma', 'grade' => '6to Secundaria'],

            // MATEMÁTICAS
            ['area' => 'MATEMÁTICAS', 'level' => 'Primer Nivel', 'grade' => '1ro Secundaria'],
            ['area' => 'MATEMÁTICAS', 'level' => 'Segundo Nivel', 'grade' => '2do Secundaria'],
            ['area' => 'MATEMÁTICAS', 'level' => 'Tercer Nivel', 'grade' => '3ro Secundaria'],
            ['area' => 'MATEMÁTICAS', 'level' => 'Cuarto Nivel', 'grade' => '4to Secundaria'],
            ['area' => 'MATEMÁTICAS', 'level' => 'Quinto Nivel', 'grade' => '5to Secundaria'],
            ['area' => 'MATEMÁTICAS', 'level' => 'Sexto Nivel', 'grade' => '6to Secundaria'],

            // QUÍMICA
            ['area' => 'QUÍMICA', 'level' => '2S', 'grade' => '2do Secundaria'],
            ['area' => 'QUÍMICA', 'level' => '3S', 'grade' => '3ro Secundaria'],
            ['area' => 'QUÍMICA', 'level' => '4S', 'grade' => '4to Secundaria'],
            ['area' => 'QUÍMICA', 'level' => '5S', 'grade' => '5to Secundaria'],
            ['area' => 'QUÍMICA', 'level' => '6S', 'grade' => '6to Secundaria'],

            // ROBÓTICA
            ['area' => 'ROBÓTICA', 'level' => 'Builders P', 'grade' => '5to Primaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Builders P', 'grade' => '6to Primaria'],

            ['area' => 'ROBÓTICA', 'level' => 'Builders S', 'grade' => '1ro Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Builders S', 'grade' => '2do Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Builders S', 'grade' => '3ro Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Builders S', 'grade' => '4to Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Builders S', 'grade' => '5to Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Builders S', 'grade' => '6to Secundaria'],

            ['area' => 'ROBÓTICA', 'level' => 'Lego P', 'grade' => '5to Primaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Lego P', 'grade' => '6to Primaria'],

            ['area' => 'ROBÓTICA', 'level' => 'Lego S', 'grade' => '1ro Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Lego S', 'grade' => '2do Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Lego S', 'grade' => '3ro Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Lego S', 'grade' => '4to Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Lego S', 'grade' => '5to Secundaria'],
            ['area' => 'ROBÓTICA', 'level' => 'Lego S', 'grade' => '6to Secundaria'],
        ];

        foreach ($relations as $relation) {
            $area = Area::where('name', $relation['area'])->first();
            $level = Level::where('name', $relation['level'])->first();
            $grade = Grade::where('name', $relation['grade'])->first();

            if ($area && $level && $grade) {
                AreaLevelGrade::firstOrCreate([
                    'area_id' => $area->id,
                    'level_id' => $level->id,
                    'grade_id' => $grade->id,
                ]);
            }
        }
    }
}
