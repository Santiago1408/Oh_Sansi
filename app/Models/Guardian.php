<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'last_name',
        'email',
        'ci',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function competitors()
    {
        return $this->belongsToMany(Competitor::class, 'competitor_guardians');
    }
}
