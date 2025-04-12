<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InscriptionPaymentOrder extends Model
{
    use HasFactory;

    protected $table = 'inscription_payment_order';

    protected $fillable = [
        'payment_order_id',
        'inscription_id',
    ];
}
