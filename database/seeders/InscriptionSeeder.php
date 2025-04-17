<?php

namespace Database\Seeders;

use App\Models\Competitor;
use App\Models\Inscription;
use App\Models\Olympic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $competitors = Competitor::all();
        $olympic = Olympic::latest()->first();

        if ($olympic) {
            foreach ($competitors as $competitor) {
                Inscription::create([
                    'competitor_id' => $competitor->id,
                    'olympic_id' => $olympic->id,
                    'payment_order_id' => null,
                    'status' => 'pending',
                    'observation' => null,
                ]);
            }
        }
    }
}
