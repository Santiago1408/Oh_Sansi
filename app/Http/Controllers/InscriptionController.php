<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class InscriptionController extends Controller
{
    public function index()
    {
        $inscriptions = Inscription::with('competitor')->get();
        return view('inscriptions.index', compact('inscriptions'));
    }

    public function show($id)
    {
        $inscription = Inscription::with('areaInscriptions.areaLevelGrade.area', 'competitor')
            ->findOrFail($id);

        $paymentOrder = $inscription->paymentOrder;

        return view('inscriptions.show', compact('inscription', 'paymentOrder'));
    }

    public function downloadPdf($id)
    {
        $inscription = Inscription::with([
            'competitor',
            'areaInscriptions.areaLevelGrade.area',
            'areaInscriptions.areaLevelGrade.level',
            'areaInscriptions.areaLevelGrade.grade',
            'paymentOrder',
            'olympic',
        ])->findOrFail($id);

        $paymentOrder = $inscription->paymentOrder;

        $pdf = Pdf::loadView('pdf.inscription', compact('inscription', 'paymentOrder'));

        return $pdf->download($inscription->competitor->name. '_Inscripcion_' . $inscription->id . '.pdf');
    }
}
