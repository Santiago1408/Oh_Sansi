<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'user_id',
        'name',
        'last_name',
        'email',
        'ci',
        'birthday',
        'phone',
        'grade',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function guardians()
    {
        return $this->belongsToMany(Guardian::class, 'competitor_guardians');
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
