<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Orden;
use App\Models\CheckList;
use PDF;

class ReportesController extends Controller
{
    public function CheckList($id)
    {
    	$servicio = CheckList::where('id',$id)->first();
    	$pdf = PDF::loadView('admin.reportes.checklist',compact('servicio'));
    	return $pdf->download('CheckList.pdf');
    	//return view('reportes.checklist')->with('servicio',$servicio);
    }

    public function ordenServicio($id){
        $orden = Orden::find($id);
        $pdf = PDF::loadView('admin.reportes.orden',compact('orden'));
    	return $pdf->download('Orden-de-servicio.pdf');
    }
}
