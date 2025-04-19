<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();

        return view('registro-areas', compact('areas'));
    }

    public function store(Request $request){
        $area = new Area();
        $area->nombre = $request->input('nombre');
        $area->costo = $request->input('costo');
        $area->save();

        return redirect()->route('areas')->with('success', 'Area created successfully.');
    }
}
