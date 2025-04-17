<?php

namespace Database\Seeders;

use App\Models\AreaInscription;
use App\Models\AreaLevelGrade;
use App\Models\Inscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaInscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $inscriptions = Inscription::all();  
        $areaLevelGrades = AreaLevelGrade::all();

        foreach ($inscriptions as $inscription) {
            $areaLevelGradesSelected = $areaLevelGrades->random(rand(1, 4));

            foreach ($areaLevelGradesSelected as $areaLevelGrade) {
                AreaInscription::create([
                    'inscription_id' => $inscription->id,
                    'area_level_grade_id' => $areaLevelGrade->id,
                    'payment_status' => 'unpaid',
                    'observation' => null,
                ]);
            }
        }
    }
}
