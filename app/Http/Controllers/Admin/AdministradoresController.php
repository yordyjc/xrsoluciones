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
use Auth;
use App\User;

class AdministradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::where('id','!=','3')->orderBy('id','desc')->get();
        return view('admin.administradores.index')
            ->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administradores.crear');
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
            'apellidos' => 'required | string',
            'email' => 'required|string|email|max:255|unique:users',
            'doc' => 'required | string | max:20',
            'tipo' => 'required'
        ]);

        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/usuarios/create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = New User();
        $user->estado = $request->estado;
        $user->nombres = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->email = $request->email;
        $user->doc = $request->doc;
        $user->tipo = $request->tipo;
        $user->password = bcrypt('12345678');
        $user->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/usuarios');
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
        $usuario = User::find($id);
        return view('admin.administradores.editar')->with('usuario',$usuario);
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
            'apellidos' => 'required | string',
            'doc' => 'required | string | max:20',
            'tipo' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id
        ]);
        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/usuarios/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $usuario = User::find($id);
        $usuario->estado = $request->estado;
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->doc = $request->doc;
        $usuario->tipo = $request->tipo;
        $usuario->save();
        alert()->success('¡Yeah!','Operación realziada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->estado = 0;
        $usuario->save();
        alert()->success('¡Yeah!, Operación realizada con éxito')->autoCLose(3000)->showCloseButton();
        return redirect('admin/usuarios');
    }
}
