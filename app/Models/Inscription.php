<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'competitor_id',
        'olympic_id',
        'status',
        'observation',
    ];

    public function competitor()
    {
        return $this->belongsTo(Competitor::class);
    }

    public function olympic()
    {
        return $this->belongsTo(Olympic::class);
    }

    public function paymentOrder()
    {
        return $this->belongsTo(PaymentOrder::class);
    }
}
