<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AreaLevelGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'level_id',
        'grade_id',
        'status',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function areaInscriptions()
    {
        return $this->hasMany(AreaInscription::class);
    }
}
