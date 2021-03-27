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
use App\Models\Servicio;
use App\Models\Material;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::orderBy('id','desc')->get();
        return view('admin.servicios.index')->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicios.crear');
    }

    public function frmNuevoServicio($id)
    {
        $materiales = Material::all()->pluck('nombre','id');
        return view('admin.trabajos.crear')
            ->with('orden',$id)
            ->with('materiales', $materiales);
    }
    public function obtener()
    {
        return view('admin.servicios.crear');
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
            'descripcion2' => 'string',
            'precio' => 'numeric'
        ], $messages);

        if ($validator->fails()) {
            alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
            return redirect('/admin/servicio/'.$request->orden)
                ->withErrors($validator)
                ->withInput();
        }

        $servicio = new Servicio();
        $servicio->orden_id = $request->orden;
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->descripcion2 = $request->descripcion2;
        $servicio->precio = $request->precio;
        $servicio->save();

        if($request->materiales_selected)
        {
            $ultimoservicio = Servicio::orderBy('id','desc')->first();
            $materiales = explode(',', $request->materiales_selected);
            foreach($materiales as $key=>$value)
            {
                if($value != "")
                $ultimoservicio->materiales()->attach($value);

            }
        }

        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/ordenes/'.$request->orden);
        // $messages = [
        //     'required' => 'El campo :attribute es requerido.',
        //     'string' => 'El campo :attribute debe ser texto'
        // ];
        // $validator = Validator::make($request->all(),[
        //     'placa' => 'required',
        //     'operacion' => 'required',
        //     'operador' => 'required',
        //     'horometro' => 'required',
        //     'kilometraje' => 'required',
        //     'motor1_foto' => 'file|mimes:png,jpg,jpeg|max:5120',
        //     'fecha' => 'required'
        // ], $messages);

        // if ($validator->fails()) {
        //     alert()->error('Ups!','La operación no pudo ser completada')->autoClose(4000)->showCloseButton();
        //     return redirect('/admin/servicios/create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // // $foto_motor_1=null;
        // // $foto_motor_2=null;
        // // $foto_motor_3=null;
        // // $foto_motor_4=null;
        // // $foto_motor_5=null;
        // // $foto_motor_6=null;
        // // $foto_motor_7=null;
        // // $foto_motor_8=null;
        // // $foto_motor_9=null;
        // // $foto_motor_10=null;
        // // $foto_motor_11=null;
        // // $foto_motor_12=null;
        // // $foto_motor_13=null;
        // // $foto_motor_14=null;
        // // $foto_motor_15=null;
        // // $foto_motor_16=null;
        // // $foto_motor_17=null;

        // $servicio = new Servicio();
        // $servicio->placa = $request->placa;
        // $servicio->operacion = $request->operacion;
        // $servicio->operador = $request->operador;
        // $servicio->horometro = $request->horometro;
        // $servicio->kilometraje = $request->kilometraje;
        // $servicio->fecha = $request->fecha;

        // //estado del operador
        // $servicio->estado_op_1 = $request->estado_op_1;
        // $servicio->estado_op_2 = $request->estado_op_2;
        // $servicio->estado_op_3 = $request->estado_op_3;


        // //campos
        // $servicio->motor1_estado = $request->motor1_estado;
        // $servicio->motor1_descripcion = $request->motor1_descripcion;
        // $foto_motor_1 = $request->motor1_foto;
        // if(!is_null($foto_motor_1))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_1->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor1'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_1->move($path,$nombre);
        //     $servicio->motor1_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor2_estado = $request->motor2_estado;
        // $servicio->motor2_descripcion = $request->motor2_descripcion;
        // $foto_motor_2 = $request->motor2_foto;
        // if(!is_null($foto_motor_2))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_2->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor2'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_2->move($path,$nombre);
        //     $servicio->motor2_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor3_estado = $request->motor3_estado;
        // $servicio->motor3_descripcion = $request->motor3_descripcion;
        // $foto_motor_3 = $request->motor3_foto;
        // if(!is_null($foto_motor_3))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_3->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor3'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_3->move($path,$nombre);
        //     $servicio->motor3_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor4_estado = $request->motor4_estado;
        // $servicio->motor4_descripcion = $request->motor4_descripcion;
        // $foto_motor_4 = $request->motor4_foto;
        // if(!is_null($foto_motor_4))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_4->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor4'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_4->move($path,$nombre);
        //     $servicio->motor4_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor5_estado = $request->motor5_estado;
        // $servicio->motor5_descripcion = $request->motor5_descripcion;
        // $foto_motor_5 = $request->motor5_foto;
        // if(!is_null($foto_motor_5))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_5->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor5'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_5->move($path,$nombre);
        //     $servicio->motor5_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor6_estado = $request->motor6_estado;
        // $servicio->motor6_descripcion = $request->motor6_descripcion;
        // $foto_motor_6 = $request->motor6_foto;
        // if(!is_null($foto_motor_6))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_6->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor6'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_6->move($path,$nombre);
        //     $servicio->motor6_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor7_estado = $request->motor7_estado;
        // $servicio->motor7_descripcion = $request->motor7_descripcion;
        // $foto_motor_7 = $request->motor7_foto;
        // if(!is_null($foto_motor_7))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_7->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor7'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_7->move($path,$nombre);
        //     $servicio->motor7_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor8_estado = $request->motor8_estado;
        // $servicio->motor8_descripcion = $request->motor8_descripcion;
        // $foto_motor_8 = $request->motor8_foto;
        // if(!is_null($foto_motor_8))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_8->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor8'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_8->move($path,$nombre);
        //     $servicio->motor8_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor9_estado = $request->motor9_estado;
        // $servicio->motor9_descripcion = $request->motor9_descripcion;
        // $foto_motor_9 = $request->motor9_foto;
        // if(!is_null($foto_motor_9))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_9->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor9'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_9->move($path,$nombre);
        //     $servicio->motor9_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor10_estado = $request->motor10_estado;
        // $servicio->motor10_descripcion = $request->motor10_descripcion;
        // $foto_motor_10 = $request->motor10_foto;
        // if(!is_null($foto_motor_10))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_10->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor10'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_10->move($path,$nombre);
        //     $servicio->motor10_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor11_estado = $request->motor11_estado;
        // $servicio->motor11_descripcion = $request->motor11_descripcion;
        // $foto_motor_11 = $request->motor11_foto;
        // if(!is_null($foto_motor_11))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_11->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor11'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_11->move($path,$nombre);
        //     $servicio->motor11_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor12_estado = $request->motor12_estado;
        // $servicio->motor12_descripcion = $request->motor12_descripcion;
        // $foto_motor_12 = $request->motor12_foto;
        // if(!is_null($foto_motor_12))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_12->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor12'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_12->move($path,$nombre);
        //     $servicio->motor12_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor13_estado = $request->motor13_estado;
        // $servicio->motor13_descripcion = $request->motor13_descripcion;
        // $foto_motor_13 = $request->motor13_foto;
        // if(!is_null($foto_motor_13))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_13->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor13'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_13->move($path,$nombre);
        //     $servicio->motor13_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor14_estado = $request->motor14_estado;
        // $servicio->motor14_descripcion = $request->motor14_descripcion;
        // $foto_motor_14 = $request->motor14_foto;
        // if(!is_null($foto_motor_14))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_14->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor14'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_14->move($path,$nombre);
        //     $servicio->motor14_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor15_estado = $request->motor15_estado;
        // $servicio->motor15_descripcion = $request->motor15_descripcion;
        // $foto_motor_15 = $request->motor15_foto;
        // if(!is_null($foto_motor_15))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_15->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor15'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_15->move($path,$nombre);
        //     $servicio->motor15_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor16_estado = $request->motor16_estado;
        // $servicio->motor16_descripcion = $request->motor16_descripcion;
        // $foto_motor_16 = $request->motor16_foto;
        // if(!is_null($foto_motor_16))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_16->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor16'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_16->move($path,$nombre);
        //     $servicio->motor16_foto = '/assets/images/servicios/'.$nombre;
        // }
        // $servicio->motor17_estado = $request->motor17_estado;
        // $servicio->motor17_descripcion = $request->motor17_descripcion;
        // $foto_motor_17 = $request->motor17_foto;
        // if(!is_null($foto_motor_17))
        // {
        //     // $subnombre= str_replace(' ', '-',strtolower($request->placa.' '.$request->horometro));
        //     $extension= $foto_motor_17->getClientOriginalExtension();
        //     // $nombre = $subnombre.'.'.$extension;
        //     $nombre = time().'_motor17'.'.'.$extension;
        //     $path = public_path().'/assets/images/servicios/';
        //     $foto_motor_17->move($path,$nombre);
        //     $servicio->motor17_foto = '/assets/images/servicios/'.$nombre;
        // }

        // //transmision
        // $servicio->tran1_estado = $request->tran1_estado;
        // $servicio->tran1_descripcion = $request->tran1_descripcion;
        // $servicio->tran2_estado = $request->tran2_estado;
        // $servicio->tran2_descripcion = $request->tran2_descripcion;
        // $servicio->tran3_estado = $request->tran3_estado;
        // $servicio->tran3_descripcion = $request->tran3_descripcion;
        // $servicio->tran4_estado = $request->tran4_estado;
        // $servicio->tran4_descripcion = $request->tran4_descripcion;
        // $servicio->tran5_estado = $request->tran5_estado;
        // $servicio->tran5_descripcion = $request->tran5_descripcion;
        // $servicio->tran6_estado = $request->tran6_estado;
        // $servicio->tran6_descripcion = $request->tran6_descripcion;
        // $servicio->tran7_estado = $request->tran7_estado;
        // $servicio->tran7_descripcion = $request->tran7_descripcion;

        // //frenos
        // $servicio->frenos1_estado = $request->frenos1_estado;
        // $servicio->frenos1_descripcion = $request->frenos1_descripcion;
        // $servicio->frenos2_estado = $request->frenos2_estado;
        // $servicio->frenos2_descripcion = $request->frenos2_descripcion;
        // $servicio->frenos3_estado = $request->frenos3_estado;
        // $servicio->frenos3_descripcion = $request->frenos3_descripcion;
        // $servicio->frenos4_estado = $request->frenos4_estado;
        // $servicio->frenos4_descripcion = $request->frenos4_descripcion;

        // //electrico
        // $servicio->ele1_estado = $request->ele1_estado;
        // $servicio->ele1_descripcion = $request->ele1_descripcion;
        // $servicio->ele2_estado = $request->ele2_estado;
        // $servicio->ele2_descripcion = $request->ele2_descripcion;
        // $servicio->ele3_estado = $request->ele3_estado;
        // $servicio->ele3_descripcion = $request->ele3_descripcion;
        // $servicio->ele4_estado = $request->ele4_estado;
        // $servicio->ele4_descripcion = $request->ele4_descripcion;
        // $servicio->ele5_estado = $request->ele5_estado;
        // $servicio->ele5_descripcion = $request->ele5_descripcion;

        // //accesorios
        // $servicio->acce1_estado = $request->acce1_estado;
        // $servicio->acce1_descripcion = $request->acce1_descripcion;
        // $servicio->acce2_estado = $request->acce2_estado;
        // $servicio->acce2_descripcion = $request->acce2_descripcion;
        // $servicio->acce3_estado = $request->acce3_estado;
        // $servicio->acce3_descripcion = $request->acce3_descripcion;
        // $servicio->acce4_estado = $request->acce4_estado;
        // $servicio->acce4_descripcion = $request->acce4_descripcion;
        // $servicio->acce5_estado = $request->acce5_estado;
        // $servicio->acce5_descripcion = $request->acce5_descripcion;
        // $servicio->acce6_estado = $request->acce6_estado;
        // $servicio->acce6_descripcion = $request->acce6_descripcion;
        // $servicio->acce7_estado = $request->acce7_estado;
        // $servicio->acce7_descripcion = $request->acce7_descripcion;
        // $servicio->acce8_estado = $request->acce8_estado;
        // $servicio->acce8_descripcion = $request->acce8_descripcion;
        // $servicio->acce9_estado = $request->acce9_estado;
        // $servicio->acce9_descripcion = $request->acce9_descripcion;
        // $servicio->acce10_estado = $request->acce10_estado;
        // $servicio->acce10_descripcion = $request->acce10_descripcion;
        // $servicio->acce11_estado = $request->acce11_estado;
        // $servicio->acce11_descripcion = $request->acce11_descripcion;
        // $servicio->acce12_estado = $request->acce12_estado;
        // $servicio->acce12_descripcion = $request->acce12_descripcion;
        // $servicio->acce13_estado = $request->acce13_estado;
        // $servicio->acce13_descripcion = $request->acce13_descripcion;
        // $servicio->acce14_estado = $request->acce14_estado;
        // $servicio->acce14_descripcion = $request->acce14_descripcion;
        // $servicio->acce15_estado = $request->acce15_estado;
        // $servicio->acce15_descripcion = $request->acce15_descripcion;
        // $servicio->acce16_estado = $request->acce16_estado;
        // $servicio->acce16_descripcion = $request->acce16_descripcion;
        // $servicio->acce17_estado = $request->acce17_estado;
        // $servicio->acce17_descripcion = $request->acce17_descripcion;
        // $servicio->acce18_estado = $request->acce18_estado;
        // $servicio->acce18_descripcion = $request->acce18_descripcion;
        // $servicio->observaciones = $request->observaciones;

        // $servicio->save();
        // alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        // return redirect('/admin/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::where('id',$id)->first();
        return view('admin.servicios.ver')->with('servicio',$servicio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $servicio = Servicio::find($id);
        $servicio->activo = 0;
        $servicio->save();
        alert()->success('¡Yeah!','Operación realizada con éxito')->autoClose(3000)->showCloseButton();
        return redirect('/admin/servicios');
    }

    public function verServicio($id)
    {
        $servicio = Servicio::where('id',$id)->first();
        return view('admin.servicios.ver')->with('servicio',$servicio);

    }

    //Agregar materiale desde el formulario de servicios
    public function crearMateriales(Request $request)
    {
        if($request->ajax()){
            $messages = [
                'required' => 'El campo :attribute es requerido.',
                'string' => 'El campo :attribute debe ser texto',
                'numeric' => 'El campo :attribute debe ser un número'
            ];
            $validator = Validator::make($request->all(),[
                'material' => 'required',
            ], $messages);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $material = new Material();
            $material->nombre = $request->material;
            $material->save();
            $lista_materiales = Material::orderBy('id','desc')->get();
            return $lista_materiales;
        }
    }
}
