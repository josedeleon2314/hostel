<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reserva;

class ReservaController extends Controller
{
    //

   // public function reserva(Request $request,$id){
    public function reserva(Request $request){
        //dd($request);

        $habitacion = new reserva();
        $habitacion->habitacion = "1";
        $habitacion->cantidad = $request->cantidad;
        $habitacion->fecini = $request->fecini;
        $habitacion->fecfin = $request->fecfin;
        $habitacion->valor_uni = $request->valor_uni;
        $habitacion->valor_total = $request->valor_total;

        $habitacion->save();

        // return ('home.index');
        if($habitacion == true){
            //return redirect('/home.index')->with('success','Reserva  creado Exitosamente!');
            return redirect()->to('/home')->with('success','Reserva  creado Exitosamente!');
        }
        else{
            return redirect('/home')->with('message','Reserva  creado Exitosamente!');

        }
    }
}
