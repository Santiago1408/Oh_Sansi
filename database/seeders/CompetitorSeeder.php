<?php

namespace Database\Seeders;

use App\Models\Competitor;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = School::take(10)->get();

        $competitors = [
            ['name' => 'Juan', 'last_name' => 'Pérez', 'email' => 'juan.perez@example.com', 'ci' => '123456789', 'birthday' => '2005-04-10', 'phone' => '78912345', 'grade' => '10'],
            ['name' => 'María', 'last_name' => 'López', 'email' => 'maria.lopez@example.com', 'ci' => '987654321', 'birthday' => '2006-06-15', 'phone' => '78912346', 'grade' => '9'],
            ['name' => 'Carlos', 'last_name' => 'González', 'email' => 'carlos.gonzalez@example.com', 'ci' => '456789123', 'birthday' => '2004-03-20', 'phone' => '78912347', 'grade' => '11'],
            ['name' => 'Ana', 'last_name' => 'Ramírez', 'email' => 'ana.ramirez@example.com', 'ci' => '321654987', 'birthday' => '2005-02-25', 'phone' => '78912348', 'grade' => '10'],
            ['name' => 'Luis', 'last_name' => 'Méndez', 'email' => 'luis.mendez@example.com', 'ci' => '654321987', 'birthday' => '2007-07-30', 'phone' => '78912349', 'grade' => '8'],
            ['name' => 'Laura', 'last_name' => 'Fernández', 'email' => 'laura.fernandez@example.com', 'ci' => '789123456', 'birthday' => '2005-05-18', 'phone' => '78912350', 'grade' => '9'],
            ['name' => 'Pedro', 'last_name' => 'Vázquez', 'email' => 'pedro.vazquez@example.com', 'ci' => '321987654', 'birthday' => '2004-09-10', 'phone' => '78912351', 'grade' => '12'],
            ['name' => 'Sofía', 'last_name' => 'Torres', 'email' => 'sofia.torres@example.com', 'ci' => '456123789', 'birthday' => '2006-01-12', 'phone' => '78912352', 'grade' => '8'],
            ['name' => 'José', 'last_name' => 'García', 'email' => 'jose.garcia@example.com', 'ci' => '654987321', 'birthday' => '2005-11-25', 'phone' => '78912353', 'grade' => '11'],
            ['name' => 'Isabel', 'last_name' => 'Jiménez', 'email' => 'isabel.jimenez@example.com', 'ci' => '987321654', 'birthday' => '2007-08-14', 'phone' => '78912354', 'grade' => '7'],
        ];

        if ($schools->count() >= count($competitors)) {
            foreach ($competitors as $index => $competitor) {
                Competitor::create([
                    'school_id' => $schools[$index]->id,
                    'user_id' => null,
                    'name' => $competitor['name'],
                    'last_name' => $competitor['last_name'],
                    'email' => $competitor['email'],
                    'ci' => $competitor['ci'],
                    'birthday' => $competitor['birthday'],
                    'phone' => $competitor['phone'],
                    'grade' => $competitor['grade'],
                ]);
            }
        } else {
            echo "No hay suficientes colegios para asignar a todos los competidores.\n";
        }
    }
}
