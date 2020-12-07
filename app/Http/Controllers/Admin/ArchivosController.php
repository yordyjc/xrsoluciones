<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Validator;
use Response;
use File;
use Carbon\Carbon;
use Auth;

use App\User;
use App\Models\Documento;

class ArchivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frmNuevoArchivo($id)
    {
        return view('admin.archivos.crear')->with('orden',$id);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'string' => 'El campo :attribute debe ser texto',
            'numeric' => 'El campo :attribute debe ser un número'
        ];
        $validator = Validator::make($request->all(),[
            'nombre' => 'required',
            'descripcion' => 'string',
            'archivo' => 'required | file | max:5120'
        ], $messages);

        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/servicio/'.$request->orden)
                ->withErrors($validator)
                ->withInput();
        }

        $documento = new Documento();
        $documento->orden_id = $request->orden;
        $documento->nombre = $request->nombre;
        $documento->descripcion = $request->descripcion;
        $archivo = $request->archivo;
        if(!is_null($archivo))
        {
            // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
            $extension= $archivo->getClientOriginalExtension();
            // $nombre = $subnombre.'.'.$extension;
            $nombre = time().'.'.$extension;
            $path = public_path().'/assets/images/documentos/';
            $archivo->move($path,$nombre);
            $documento->archivo = '/assets/images/documentos/'.$nombre;
        }
        $documento->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/ordenes/'.$request->orden);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
