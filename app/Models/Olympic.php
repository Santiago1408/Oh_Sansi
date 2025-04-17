<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Olympic extends Model
{
    use HasFactory;

    const STATE_REGISTRATION = 'registration';
    const STATE_VALIDATION = 'validation';
    const STATE_COMPETITION = 'competition';
    const STATE_CLOSED = 'closed';

    protected $fillable = [
        'name',
        'state',
        'description',
        'date_fin',
    ];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
