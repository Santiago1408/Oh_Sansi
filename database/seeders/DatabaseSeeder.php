<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                AreaSeeder::class,
                LevelSeeder::class,
                GradeSeeder::class,
                AreaLevelGradeSeeder::class,
                DepartmentSeeder::class,
                ProvinceSeeder::class,
                SchoolSeeder::class,
                OlympicSeeder::class,
                CompetitorSeeder::class,
                GuardianSeeder::class,
                CompetitorGuardianSeeder::class,
                InscriptionSeeder::class,
                AreaInscriptionSeeder::class
            ]
        );
    }
}
