<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id','desc')->get();
        return view('admin.categorias.index')->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'nombre' => 'required | string',
        ]);

        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/usuarios/create')
                ->withErrors($validator)
                ->withInput();
        }
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->estado = $request->estado;
        $categoria->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/categorias');
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
        $categoria = Categoria::find($id);
        return view('admin.categorias.editar')->with('categoria',$categoria);
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
        $validator= Validator::make($request->all(),[
            'nombre' => 'required | string',
        ]);

        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/usuarios/create')
                ->withErrors($validator)
                ->withInput();
        }
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->estado = $request->estado;
        $categoria->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->estado = 0;
        $categoria->save();
        alert()->success('¡Yeah!, Operación realizada con éxito')->autoCLose(3000)->showCloseButton();
        return redirect('admin/categorias');
    }
}
