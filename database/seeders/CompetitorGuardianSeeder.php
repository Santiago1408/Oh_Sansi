<?php

namespace Database\Seeders;

use App\Models\Competitor;
use App\Models\Guardian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitorGuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competitors = Competitor::all();
        $guardians = Guardian::all();

        if ($competitors->isNotEmpty() && $guardians->isNotEmpty()) {
            foreach ($competitors as $competitor) {
                $randomGuardians = $guardians->random(rand(1, 3));

                foreach ($randomGuardians as $guardian) {
                    $competitor->guardians()->attach($guardian);
                }
            }
        } else {
            echo "No hay competidores o guardianes disponibles para asociar.\n";
        }
    }
}
