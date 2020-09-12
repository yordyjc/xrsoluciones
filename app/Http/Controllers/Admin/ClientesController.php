<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Validator;
use Response;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
use Auth;
use App\User;
use App\Models\Conductor;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = User::where('id','3')->orderBy('id','desc')->get();
        return view('admin.clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.crear');
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
            'nombres' => 'required | string',
            'cel' => 'required',
            'direccion' => 'string',
            'email' => 'required|string|email|max:255|unique:users',
            'doc' => 'required | string | max:20',
            'observaciones' => 'string'
        ]);

        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/clientes/create')
                ->withErrors($validator)
                ->withInput();
        }

        $cliente = new User();
        $cliente->tipo = 3;
        $cliente->estado = $request->estado;
        $cliente->nombres = $request->nombres;
        $cliente->cel = $request->cel;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
        $cliente->doc = $request->doc;
        $cliente->observaciones = $request->observaciones;
        $cliente->password = bcrypt('12345678');

        $cliente->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/clientes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = User::find($id);
        return view('admin.clientes.ver')->with('cliente',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = User::find($id);
        return view('admin.clientes.editar')->with('cliente',$cliente);
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
            'nombres' => 'required | string',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'doc' => 'required | string | max:20',
            'estado' =>'required',
            'direccion' =>'string',
            'observaciones' => 'string'
        ]);

        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/clientes/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $cliente = User::find($id);
        $cliente->estado = $request->estado;
        $cliente->nombres = $request->nombres;
        $cliente->cel = $request->cel;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
        $cliente->doc = $request->doc;
        $cliente->observaciones = $request->observaciones;
        $cliente->tipo = 3;

        $cliente->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = User::find($id);
        $cliente->estado = 0;
        $cliente->save();
        alert()->success('¡Yeah!, Operación realizada con éxito')->autoCLose(3000)->showCloseButton();
        return redirect('admin/clientes');
    }

    //conductor

    public function formConductor($id)
    {
        $cliente = User::find($id);
        return view('admin.conductores.crear')->with('cliente',$cliente);
    }

    public function nuevoConductor(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'estado' => 'required',
            'nombres' => 'required | string',
            'apellidos' => 'required | string',
            'email' => 'required|string|email|max:255|unique:conductores',
            'doc' => 'required | string | max:20',
            'licencia' => 'required',
            'caducidad' => 'required',
            'observaciones' => 'string'
        ]);

        if ($validator->fails()) {
            $cliente = User::find($request->id);
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/conductores/'.$request->cliente)
                ->withErrors($validator)
                ->withInput();
        }

        $conductor = new Conductor();
        $conductor->cliente_id = $request->cliente;
        $conductor->estado = $request->estado;
        $conductor->nombres = $request->nombres;
        $conductor->apellidos = $request->apellidos;
        $conductor->cel = $request->cel;
        $conductor->email = $request->email;
        $conductor->doc = $request->doc;
        $conductor->licencia = $request->licencia;
        $conductor->caducidad = $request->caducidad;
        $conductor->observaciones = $request->observaciones;
        $conductor->save();
        alert()->success('¡Yeah!, Operación realizada con éxito')->autoCLose(3000)->showCloseButton();
        return redirect('admin/clientes');
    }

    public function formEditarConductor($id)
    {
        $conductor = Conductor::find($id);
        return view('admin.conductores.editar')->with('conductor',$conductor);
    }

    public function editarConductor(Request $request, $id)
    {
        $validator= Validator::make($request->all(),[
            'nombres' => 'required | string',
            'apellidos' => 'required | string',
            'email' => 'required|string|email|max:255|unique:conductores,email,'.$id,
            'doc' => 'required | string | max:20',
            'licencia' => 'required',
            'caducidad' => 'required',
            'observaciones' => 'string'
        ]);

        if ($validator->fails()) {
            $cliente = User::find($request->id);
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/conductores/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $conductor = Conductor::find($id);
        $conductor->nombres = $request->nombres;
        $conductor->apellidos = $request->apellidos;
        $conductor->cel = $request->cel;
        $conductor->email = $request->email;
        $conductor->doc = $request->doc;
        $conductor->licencia = $request->licencia;
        $conductor->caducidad = $request->caducidad;
        $conductor->observaciones = $request->observaciones;
        $conductor->save();
        alert()->success('¡Yeah!, Operación realizada con éxito')->autoCLose(3000)->showCloseButton();
        return redirect('admin/clientes/'.$conductor->cliente->id);

    }

}
