@extends('layouts.app')
@section('title')
Mantenimiento de flota
@endsection

@section('content')
<div class="card-body">
	<h4 class="mt-0 header-title">Datos iniciales</h4>
	<form action="{{url('/servicios')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group row {{ $errors->has('placa') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="placa">
                Placa
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('placa') ? ' form-control-warning' : '' }}" type="text" id="placa" name="placa" value="{{old('placa')}}" >
                @if ($errors->has('placa'))
                    <div class="col-form-label">
                        {{ $errors->first('placa') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('operacion') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="operacion">
                Operación
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('operacion') ? ' form-control-warning' : '' }}" type="text" id="operacion" name="operacion" value="{{old('operacion')}}">
                @if ($errors->has('operacion'))
                    <div class="col-form-label">
                        {{ $errors->first('operacion') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('operador') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="operador">
                Operador
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('operador') ? ' form-control-warning' : '' }}" type="text" id="operador" name="operador" value="{{old('operador')}}">
                @if ($errors->has('operador'))
                    <div class="col-form-label">
                        {{ $errors->first('operador') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('horometro') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="horometro">
                Horometro
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('horometro') ? ' form-control-warning' : '' }}" type="text" id="horometro" name="horometro" value="{{old('horometro')}}">
                @if ($errors->has('horometro'))
                    <div class="col-form-label">
                        {{ $errors->first('horometro') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('kilometraje') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="kilometraje">
                Kilometraje
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('kilometraje') ? ' form-control-warning' : '' }}" type="text" id="kilometraje" name="kilometraje" value="{{old('kilometraje')}}">
                @if ($errors->has('kilometraje'))
                    <div class="col-form-label">
                        {{ $errors->first('kilometraje') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('fecha') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="fecha">
                Fecha
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('fecha') ? ' form-control-warning' : '' }}" type="date" id="fecha" name="fecha" value="{{old('fecha')}}">
                @if ($errors->has('fecha'))
                    <div class="col-form-label">
                        {{ $errors->first('fecha') }}
                    </div>
                @endif
            </div>
        </div>
        <br>
        <h4 class="mt-0 header-title">Estado fisico del operador</h4>
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado-op-1">
                Estoy descansado y me encuentro en buenas condiciones para conducir u operar el equipo.
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado-op-1" id="estado-op-1" value="1" checked="checked">
                    <i class="helper"></i>Si
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado-op-1" id="estado-op-1" value="0" >
                    <i class="helper"></i>No
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado-op-2">
                Mi estado de alerta y capacidad de respuesta estan en buenas condiciones (No influencia por Alcohol, drogas o medicamentos).
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado-op-2" id="estado-op-2" value="1" checked="checked">
                    <i class="helper"></i>Si
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado-op-2" id="estado-op-2" value="0" >
                    <i class="helper"></i>No
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado-op-3">
                Estoy consiente de la responsabilidad que significa conducir u operar vehiculo u equipo.
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado-op-3" id="estado-op-3" value="1" checked="checked">
                    <i class="helper"></i>Si
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado-op-3" id="estado-op-3" value="0" >
                    <i class="helper"></i>No
                    </label>
                </div>
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Motor</h4>


        <h4 class="mt-0 header-title">Tapa de aceite de motor.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor1_estado" id="motor1_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor1_estado" id="motor1_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor1_estado" id="motor1_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor1_descripcion" name="motor1_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de aceite de motor.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor2_estado" id="motor2_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor2_estado" id="motor2_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor2_estado" id="motor2_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor2_descripcion" name="motor2_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de refrigerante.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor3_estado" id="motor3_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor3_estado" id="motor3_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor3_estado" id="motor3_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor3_descripcion" name="motor3_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de hidrolina.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor4_estado" id="motor4_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor4_estado" id="motor4_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor4_estado" id="motor4_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor4_descripcion" name="motor4_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de liquido de freno.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor5_estado" id="motor5_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor5_estado" id="motor5_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor5_estado" id="motor5_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor5_descripcion" name="motor5_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de líquido limpia parabrisas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor6_estado" id="motor6_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor6_estado" id="motor6_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor6_estado" id="motor6_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor6_descripcion" name="motor6_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Radiador - Tanque de expansión.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor7_estado" id="motor7_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor7_estado" id="motor7_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor7_estado" id="motor7_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor7_descripcion" name="motor7_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Fajas - templadores - poleas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor8_estado" id="motor8_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor8_estado" id="motor8_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor8_estado" id="motor8_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor8_descripcion" name="motor8_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Filtro de aire - manguera -Intercooler.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor9_estado" id="motor9_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor9_estado" id="motor9_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor9_estado" id="motor9_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor9_descripcion" name="motor9_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Plumillas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor10_estado" id="motor10_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor10_estado" id="motor10_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor10_estado" id="motor10_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor10_descripcion" name="motor10_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de aceite.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor11_estado" id="motor11_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor11_estado" id="motor11_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor11_estado" id="motor11_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor11_motor12-estado" name="motor11_motor12-estado">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de refrigerante..</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor12_estado" id="motor12_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor12_estado" id="motor12_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor12_estado" id="motor12_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor12_descripcion" name="motor12_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de hidrolina.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor13_estado" id="motor13_estado" value="2" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor13_estado" id="motor13_estado" value="3" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor13_estado" id="motor13_estado" value="0" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor13_descripcion" name="motor13_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de liquido de freno.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor14_estado" id="motor14_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor14_estado" id="motor14_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor14_estado" id="motor14_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor14_descripcion" name="motor14_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de combustible.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor15_estado" id="motor15_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor15_estado" id="motor15_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor15_estado" id="motor15_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor15_descripcion" name="motor15_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Caja de fusibles.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor16_estado" id="motor16_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor16_estado" id="motor16_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor16_estado" id="motor16_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor16_descripcion" name="motor16_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Batería (bornes libres de sulfato).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor17_estado" id="motor17_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor17_estado" id="motor17_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="motor17_estado" id="motor17_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor17_descripcion" name="motor17_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Transmisión</h4>

        <h4 class="mt-0 header-title">Poncho de punta de palier.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran1_estado" id="tran1_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran1_estado" id="tran1_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran1_estado" id="tran1_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran1_descripcion" name="tran1_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Llantas (cocada no menor a 4mm.).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran2_estado" id="tran2_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran2_estado" id="tran2_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran2_estado" id="tran2_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>

        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran2_descipcion" name="tran2_descipcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Llantas (presión de aire 35 PSI).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran3_estado" id="tran3_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran3_estado" id="tran3_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran3_estado" id="tran3_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran3_descripcion" name="tran3_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Ruedas (ajuste tuercas 105N-m 77Lb-pie).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran4_estado" id="tran4_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran4_estado" id="tran4_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran4_estado" id="tran4_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran4_descripcion" name="tran4_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Roseta (quebrada o suelta).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran5_estado" id="tran5_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran5_estado" id="tran5_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran5_estado" id="tran5_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran5_descripcion" name="tran5_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Llanta de repuesta.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran6_estado" id="tran6_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran6_estado" id="tran6_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran6_estado" id="tran6_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran6_descripcion" name="tran6_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Seguro de tuerca de rueda.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran7_estado" id="tran7_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran7_estado" id="tran7_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tran7_estado" id="tran7_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran7_descripcion" name="tran7_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Suspensión - frenos</h4>
                <h4 class="mt-0 header-title">Amortiguadores.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos1_estado" id="frenos1_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos1_estado" id="frenos1_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos1_estado" id="frenos1_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos1_descripcion" name="frenos1_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

                <h4 class="mt-0 header-title">Muelles posteriores.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos2_estado" id="frenos2_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos2_estado" id="frenos2_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos2_estado" id="frenos2_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos2_descripcion" name="frenos2_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

                <h4 class="mt-0 header-title">Pastillas de freno (limpias).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos3_estado" id="frenos3_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos3_estado" id="frenos3_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos3_estado" id="frenos3_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos3_descripcion" name="frenos3_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Freno de parqueo.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos4_estado" id="frenos4_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos4_estado" id="frenos4_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="frenos4_estado" id="frenos4_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos4_descripcion" name="frenos4_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Eléctrico</h4>
        <h4 class="mt-0 header-title">Nivel de combustible.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele1_estado" id="ele1_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele1_estado" id="ele1_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele1_estado" id="ele1_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele1_descripcion" name="ele1_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Relojes - Controles de tablero.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele2_estado" id="ele2_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele2_estado" id="ele2_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele2_estado" id="ele2_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele2_descripcion" name="ele2_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Luces -neblineros -Circulina -Pértiga.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele3_estado" id="ele3_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele3_estado" id="ele3_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele3_estado" id="ele3_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele3_descripcion" name="ele3_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Interruptor de batería.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele4_estado" id="ele4_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele4_estado" id="ele4_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele4_estado" id="ele4_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele4_descripcion" name="ele4_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Alarma de retroceso - sirena.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele5_estado" id="ele5_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele5_estado" id="ele5_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="ele5_estado" id="ele5_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele5_descripcion" name="ele5_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Accesorios</h4>
        <h4 class="mt-0 header-title">Gata hidráulica de 2 tn.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce1_estado" id="acce1_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce1_estado" id="acce1_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce1_estado" id="acce1_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce1_descripcion" name="acce1_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Llave de ruedas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce2_estado" id="acce2_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce2_estado" id="acce2_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce2_estado" id="acce2_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce2_descripcion" name="acce2_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Botiquín de primeros auxilios</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce3_estado" id="acce3_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce3_estado" id="acce3_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce3_estado" id="acce3_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce3_descripcion" name="acce3_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Linterna.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce4_estado" id="acce4_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce4_estado" id="acce4_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce4_estado" id="acce4_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce4_descripcion" name="acce4_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Cables de paso de energía.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce5_estado" id="acce5_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce5_estado" id="acce5_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce5_estado" id="acce5_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce5_descripcion" name="acce5_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Triángulos de seguridad.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce6_estado" id="acce6_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce6_estado" id="acce6_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce6_estado" id="acce6_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce6_descripcion" name="acce6_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Conos de seguridad.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce7_estado" id="acce7_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce7_estado" id="acce7_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce7_estado" id="acce7_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce7_descripcion" name="acce7_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Tacos o cuñas .</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce8_estado" id="acce8_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce8_estado" id="acce8_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce8_estado" id="acce8_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce8_descripcion" name="acce8_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Extintores PQS de 06 Kg.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce9_estado" id="acce9_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce9_estado" id="acce9_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce9_estado" id="acce9_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce9_descripcion" name="acce9_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Herramientas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce10_estado" id="acce10_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce10_estado3" id="acce10_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce10_estado" id="acce10_estado3" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce10_descripcion" name="acce10_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Tarjeta de propiedad - mercancías.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce11_estado" id="acce11_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce11_estado" id="acce11_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce11_estado" id="acce11_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce11_descripcion" name="acce11_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Soat vigente.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce12_estado" id="acce12_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce12_estado" id="acce12_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce12_estado" id="acce12_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce12_descripcion" name="acce12_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Inspección técnica MTC vigente.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce13_estado" id="acce13_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce13_estado" id="acce13_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce13_estado" id="acce13_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce13_descripcion" name="acce13_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Manual de operación.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce14_estado" id="acce14_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce14_estado" id="acce14_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce14_estado" id="acce14_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce14_descripcion" name="acce14_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Cable de remolque.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce15_estado" id="acce15_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce15_estado" id="acce15_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce15_estado" id="acce15_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce15_descripcion" name="acce15_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Tapiz de asientos.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce16_estado" id="acce16_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce16_estado" id="acce16_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce16_estado" id="eacce16_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce16_descripcion" name="acce16_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Cinturones de seguridad.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce17_estado" id="acce17_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce17_estado" id="acce17_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce17_estado" id="acce17_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce17_descripcion" name="acce17_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <h4 class="mt-0 header-title">Choques - raspones.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce18_estado" id="acce18_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce18_estado" id="acce18_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="acce18_estado" id="acce18_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce18_descripcion" name="acce18_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor1'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1') }}
                    </div>
                @endif
            </div>
        </div>

        <br>
        <br>
        <div class="col-sm-10 offset-sm-1">
            <div class="form-group row text-center">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-lg btn-warning waves-effect waves-light">
                        <i class="icofont icofont-save"></i> Guardar
                    </button>
                </div>
                <div class="col-sm-6">
                    <button type="reset" class="btn btn-lg btn-danger waves-effect waves-light">
                        <i class="icofont icofont-save"></i> Borrar
                    </button>
                </div>
            </div>  
        </div>
	</form>
</div>

@endsection