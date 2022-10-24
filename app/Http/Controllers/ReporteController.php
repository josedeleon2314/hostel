<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reserva;

class ReporteController extends Controller
{
    //
    public function reporte(){
        $reportes = reserva::all();
        //dd($reportes);
        //return redirect()->to('/reporte')->with('data', $reportes);
        return view('home.reporte', compact('reportes'));
       //return view('home.reporte');

    }
}
