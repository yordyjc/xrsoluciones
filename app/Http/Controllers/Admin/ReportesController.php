<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use PDF;

class ReportesController extends Controller
{
    public function CheckList($id)
    {
    	$servicio = Servicio::where('id',$id)->first();
    	$pdf = PDF::loadView('admin.reportes.checklist',compact('servicio'));
    	return $pdf->download('CheckList.pdf');
    	//return view('reportes.checklist')->with('servicio',$servicio);
    }
}
