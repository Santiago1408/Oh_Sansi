<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'total',
        'status',
    ];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
