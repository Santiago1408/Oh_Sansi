<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\PaymentOrder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentOrderController extends Controller
{
    public function generateFromInscription($inscriptionId)
    {
        $inscription = Inscription::with('areaInscriptions.areaLevelGrade.area')->findOrFail($inscriptionId);

        $total = $inscription->areaInscriptions->sum(function ($areaInscription) {
            return $areaInscription->areaLevelGrade->area->price;
        });

        $paymentOrder = PaymentOrder::create([
            'code' => Str::uuid(),
            'total' => $total,
            'status' => 'pending',
        ]);

        $inscription->payment_order_id = $paymentOrder->id;
        $inscription->save();

        return redirect()
            ->route('inscriptions.show', $inscriptionId)
            ->with('success', 'Orden de pago generada correctamente.');
    }
}
