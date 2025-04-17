<?php

namespace Database\Seeders;

use App\Models\Guardian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guardians = [
            ['name' => 'Juan Pérez', 'last_name' => 'González', 'email' => 'juan.perez@example.com', 'type' => 'Padre', 'phone' => '78912345', 'ci' => '123456789'],
            ['name' => 'María López', 'last_name' => 'Fernández', 'email' => 'maria.lopez@example.com', 'type' => 'Madre', 'phone' => '78912346', 'ci' => '987654321'],
            ['name' => 'Carlos Méndez', 'last_name' => 'Rodríguez', 'email' => 'carlos.mendez@example.com', 'type' => 'Tutor', 'phone' => '78912347', 'ci' => '456789123'],
            ['name' => 'Ana Torres', 'last_name' => 'Ramírez', 'email' => 'ana.torres@example.com', 'type' => 'Hermano', 'phone' => '78912348', 'ci' => '321654987'],
        ];

        foreach ($guardians as $guardian) {
            Guardian::firstOrCreate(
                ['email' => $guardian['email']],
                [
                    'name' => $guardian['name'],
                    'last_name' => $guardian['last_name'],
                    'email' => $guardian['email'],
                    'phone' => $guardian['phone'],
                    'ci' => $guardian['ci'],
                ]
            );
        }
    }
}
