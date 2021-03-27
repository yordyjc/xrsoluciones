<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Models\Orden;
use App\Models\Categoria;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::orderBy('id', 'desc')->get();
        return view('admin.ordenes.index')->with('ordenes',$ordenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = Categoria::all()->where('estado',1)->pluck('nombre','id');
        return view('admin.ordenes.crear')->with('tipo',$tipo);
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
            'string' => 'El campo :attribute debe ser texto'
        ];
        $validator = Validator::make($request->all(),[
            'nombres' => 'string | required',
            'email' => 'string|email|max:255|unique:users',
            'doc' => 'string',
            'tipo' => 'required',
            'horometro' => 'required',
            'kilometraje' => 'required',
            'entrega' => 'required'
        ],$messages);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/ordenes/create')
                ->withErrors($validator)
                ->withInput();
        }
        $cliente = new User();
        $cliente->tipo = 3;
        $cliente->nombres = $request->nombres;
        $cliente->email = $request->email;
        $cliente->doc = $request->doc;
        $cliente->direccion = $request->direccion;
        $cliente->cel = $request->cel;
        $cliente->password = bcrypt('12345678');
        $cliente->save();
        $ultimocliente = User::orderBy('id','desc')->first();
        //registro de nueva orden
        $orden = new Orden();
        $orden->cliente_id = $ultimocliente->id;
        $orden->categoria_id = $request->tipo;
        $orden->horometro = $request->horometro;
        $orden->kilometraje = $request->kilometraje;
        $orden->entrega = $request->entrega;
        $orden->estado = $request->estado;
        $orden->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/ordenes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orden = Orden::find($id);
        return view('admin.ordenes.ver')->with('orden',$orden);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orden = Orden::find($id);
        return view('admin.ordenes.editar')
            ->with('orden', $orden);
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
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'string' => 'El campo :attribute debe ser texto'
        ];
        $validator = Validator::make($request->all(),[
            'nombres' => 'string | required',
            'doc' => 'string',
            'horometro' => 'required',
            'kilometraje' => 'required',
            'entrega' => 'required',
        ],$messages);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/ordenes/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $orden = Orden::find($id);
        $cliente_id = $orden->cliente->id;
        $cliente = User::find($cliente_id);
        $cliente->nombres = $request->nombres;
        $cliente->doc = $request->doc;
        $cliente->direccion = $request->direccion;
        $cliente->cel = $request->cel;
        $cliente->save();
        //registro de nueva orden
        $orden->horometro = $request->horometro;
        $orden->kilometraje = $request->kilometraje;
        $orden->entrega = $request->entrega;
        $orden->estado = $request->estado;
        $orden->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/ordenes');
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
