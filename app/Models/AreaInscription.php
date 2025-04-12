<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class AreaInscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'inscription_id',
        'area_level_grade_id',
        'payment_status',
        'observation',
    ];

    public function inscription()
    {
        return $this->belongsTo(Inscription::class);
    }

    public function areaLevelGrade()
    {
        return $this->belongsTo(AreaLevelGrade::class);
    }
}
