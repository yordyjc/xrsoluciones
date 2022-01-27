@extends('layouts.app')
@section('title')
Check list camión grua
@endsection

@section('content')
<div class="card-body">
	<h4 class="mt-0 header-title">Datos iniciales</h4>
	<form action="{{url('/admin/checklist')}}" method="post" enctype="multipart/form-data">
		@csrf
        <input type="hidden" id="orden" name="orden" value="{{$orden}}" >
        <input type="hidden" id="tipo" name="formato" value="1" >
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
            <label class="col-md-4 col-form-label" for="estado_op_1">
                Estoy descansado y me encuentro en buenas condiciones para conducir u operar el equipo.
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado_op_1" id="estado_op_1" value="1" checked="checked">
                    <i class="helper"></i>Si
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado_op_1" id="estado_op_1" value="0" >
                    <i class="helper"></i>No
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado_op_2">
                Mi estado de alerta y capacidad de respuesta estan en buenas condiciones (No influencia por Alcohol, drogas o medicamentos).
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado_op_2" id="estado_op_2" value="1" checked="checked">
                    <i class="helper"></i>Si
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado_op_2" id="estado_op_2" value="0" >
                    <i class="helper"></i>No
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado_op_3">
                Estoy consiente de la responsabilidad que significa conducir u operar vehiculo u equipo.
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado_op_3" id="estado_op_3" value="1" checked="checked">
                    <i class="helper"></i>Si
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado_op_3" id="estado_op_3" value="0" >
                    <i class="helper"></i>No
                    </label>
                </div>
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Motor</h4>


        <h4 class="mt-0 header-title">Nivel de aceite de motor</h4>
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
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor1_foto" class="form-control {{ $errors->has('motor1_foto') ? ' form-control-warning' : '' }}" name="motor1_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor1_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor1_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor1_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de refrigerante</h4>
        <div class="form-group row detalles {{ $errors->has('motor2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor2">
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
        <div class="form-group row detalles{{ $errors->has('motor2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor2">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor2') ? ' form-control-warning' : '' }}" type="text" id="motor2_descripcion" name="motor2_descripcion">{{old('motor2')}}</textarea>
                @if ($errors->has('motor2'))
                    <div class="col-form-label">
                        {{ $errors->first('motor2') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor2_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor2_foto" class="form-control {{ $errors->has('motor2_foto') ? ' form-control-warning' : '' }}" name="motor2_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor2_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor2_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor2_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de Petróleo</h4>
        <div class="form-group row detalles {{ $errors->has('motor3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor3">
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
        <div class="form-group row detalles{{ $errors->has('motor3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor3">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor3') ? ' form-control-warning' : '' }}" type="text" id="motor3_descripcion" name="motor3_descripcion">{{old('motor3')}}</textarea>
                @if ($errors->has('motor3'))
                    <div class="col-form-label">
                        {{ $errors->first('motor3') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor3_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor3_foto" class="form-control {{ $errors->has('motor3_foto') ? ' form-control-warning' : '' }}" name="motor3_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor3_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor3_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor3_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de líquido limpia parabrisas</h4>
        <div class="form-group row detalles {{ $errors->has('motor4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor4">
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
        <div class="form-group row detalles{{ $errors->has('motor4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor4">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor4_descripcion" name="motor4_descripcion">{{old('motor4')}}</textarea>
                @if ($errors->has('motor4'))
                    <div class="col-form-label">
                        {{ $errors->first('motor4') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('motor4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor4_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor4_foto" class="form-control {{ $errors->has('motor4_foto') ? ' form-control-warning' : '' }}" name="motor4_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor4_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor4_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor4_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Radiador - Tanque de expansión</h4>
        <div class="form-group row detalles {{ $errors->has('motor5') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor5">
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
        <div class="form-group row detalles{{ $errors->has('motor5') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor5">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor5_descripcion" name="motor5_descripcion">{{old('motor5')}}</textarea>
                @if ($errors->has('motor5'))
                    <div class="col-form-label">
                        {{ $errors->first('motor5') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor5_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor5_foto" class="form-control {{ $errors->has('motor5_foto') ? ' form-control-warning' : '' }}" name="motor5_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor5_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor5_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor5_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Fajas - templadores - poleas</h4>
        <div class="form-group row detalles {{ $errors->has('motor6') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor6">
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
        <div class="form-group row detalles{{ $errors->has('motor6') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor6">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor6') ? ' form-control-warning' : '' }}" type="text" id="motor6_descripcion" name="motor6_descripcion">{{old('motor6')}}</textarea>
                @if ($errors->has('motor6'))
                    <div class="col-form-label">
                        {{ $errors->first('motor6') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor6_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor6_foto" class="form-control {{ $errors->has('motor6_foto') ? ' form-control-warning' : '' }}" name="motor6_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor6_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor6_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor6_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Filtro de aire - intercooler</h4>
        <div class="form-group row detalles {{ $errors->has('motor7') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor7">
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
        <div class="form-group row detalles{{ $errors->has('motor7') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor7">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor7') ? ' form-control-warning' : '' }}" type="text" id="motor7_descripcion" name="motor7_descripcion">{{old('motor7')}}</textarea>
                @if ($errors->has('motor7'))
                    <div class="col-form-label">
                        {{ $errors->first('motor7') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('motor7') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor7_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor7_foto" class="form-control {{ $errors->has('motor7_foto') ? ' form-control-warning' : '' }}" name="motor7_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor7_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor7_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor7_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Mangueras admisión refrigerante y combustible</h4>
        <div class="form-group row detalles {{ $errors->has('motor8') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor8">
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
        <div class="form-group row detalles{{ $errors->has('motor8') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor8">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor8_descripcion" name="motor8_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('motor8'))
                    <div class="col-form-label">
                        {{ $errors->first('motor8') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('motor8') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor8_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="motor8_foto" class="form-control {{ $errors->has('motor4_foto') ? ' form-control-warning' : '' }}" name="motor8_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('motor8_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('motor8_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-motor8_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Transmisión</h4>

        <h4 class="mt-0 header-title">Embrague - Caja de cambios</h4>
        <div class="form-group row detalles {{ $errors->has('tran1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran1">
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
        <div class="form-group row detalles{{ $errors->has('tran1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('tran1') ? ' form-control-warning' : '' }}" type="text" id="tran1_descripcion" name="tran1_descripcion">{{old('tran1')}}</textarea>
                @if ($errors->has('tran1'))
                    <div class="col-form-label">
                        {{ $errors->first('tran1') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('tran1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran1_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="tran1_foto" class="form-control {{ $errors->has('tran1_foto') ? ' form-control-warning' : '' }}" name="tran1_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('tran1_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('tran1_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-tran1_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Crucetas - soporte de cardán</h4>
        <div class="form-group row detalles {{ $errors->has('tran2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran2">
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
        <div class="form-group row detalles{{ $errors->has('tran2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran2">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('tran2') ? ' form-control-warning' : '' }}" type="text" id="tran2_descipcion" name="tran2_descipcion">{{old('tran2')}}</textarea>
                @if ($errors->has('tran2'))
                    <div class="col-form-label">
                        {{ $errors->first('tran2') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('tran2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran2_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="tran2_foto" class="form-control {{ $errors->has('tran2_foto') ? ' form-control-warning' : '' }}" name="tran2_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('tran2_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('tran2_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-tran2_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Diferenciales</h4>
        <div class="form-group row detalles {{ $errors->has('tran3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran3">
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
        <div class="form-group row detalles{{ $errors->has('tran3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran3">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('tran3') ? ' form-control-warning' : '' }}" type="text" id="tran3_descripcion" name="tran3_descripcion">{{old('tran3')}}</textarea>
                @if ($errors->has('tran3'))
                    <div class="col-form-label">
                        {{ $errors->first('tran3') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('tran3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran3_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="tran3_foto" class="form-control {{ $errors->has('tran3_foto') ? ' form-control-warning' : '' }}" name="tran3_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('tran3_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('tran3_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-tran3_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Llantas incluye repuesto (    )</h4>
        <div class="form-group row detalles {{ $errors->has('tran4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran4">
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
        <div class="form-group row detalles{{ $errors->has('tran4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran4">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('tran4') ? ' form-control-warning' : '' }}" type="text" id="tran4_descripcion" name="tran4_descripcion">{{old('motor1')}}</textarea>
                @if ($errors->has('tran4'))
                    <div class="col-form-label">
                        {{ $errors->first('tran4') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('tran4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tran4_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="tran4_foto" class="form-control {{ $errors->has('tran4_foto') ? ' form-control-warning' : '' }}" name="tran4_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('tran4_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('tran4_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-tran4_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Dirección</h4>
        <h4 class="mt-0 header-title">Nivel de hidrolina</h4>
        <div class="form-group row detalles {{ $errors->has('dir1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir1_estado" id="dir1_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir1_estado" id="dir1_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir1_estado" id="dir1_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('dir1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('dir1') ? ' form-control-warning' : '' }}" type="text" id="dir1_descripcion" name="dir1_descripcion">{{old('dir1')}}</textarea>
                @if ($errors->has('dir1'))
                    <div class="col-form-label">
                        {{ $errors->first('dir1') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('dir1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir1_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="dir1_foto" class="form-control {{ $errors->has('dir1_foto') ? ' form-control-warning' : '' }}" name="dir1_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('tran4_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('tran4_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-dir1_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Servo - Cajas de dirección</h4>
        <div class="form-group row detalles {{ $errors->has('dir2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir2">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir2_estado" id="dir2_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir2_estado" id="dir2_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir2_estado" id="dir2_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('dir2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir2">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('dir2') ? ' form-control-warning' : '' }}" type="text" id="dir2_descripcion" name="dir2_descripcion">{{old('dir2')}}</textarea>
                @if ($errors->has('dir2'))
                    <div class="col-form-label">
                        {{ $errors->first('dir2') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('dir2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir2_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="dir2_foto" class="form-control {{ $errors->has('dir2_foto') ? ' form-control-warning' : '' }}" name="dir2_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('dir2_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('dir2_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-dir2_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Brazos - terminales de dirección</h4>
        <div class="form-group row detalles {{ $errors->has('dir3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir3">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir3estado" id="dir3_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir3_estado" id="dir3_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir3_estado" id="dir3_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('dir3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir3">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('dir3') ? ' form-control-warning' : '' }}" type="text" id="dir3_descripcion" name="dir3_descripcion">{{old('dir3')}}</textarea>
                @if ($errors->has('dir3'))
                    <div class="col-form-label">
                        {{ $errors->first('dir3') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('dir3') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir3_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="dir3_foto" class="form-control {{ $errors->has('dir3_foto') ? ' form-control-warning' : '' }}" name="dir3_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('dir3_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('dir3_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-dir3_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Enfriador de aceite</h4>
        <div class="form-group row detalles {{ $errors->has('dir4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir4">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir4_estado" id="dir4_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir4_estado" id="dir4_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir4_estado" id="dir4_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('dir4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir4">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('dir4') ? ' form-control-warning' : '' }}" type="text" id="dir4_descripcion" name="dir4_descripcion">{{old('dir3')}}</textarea>
                @if ($errors->has('dir4'))
                    <div class="col-form-label">
                        {{ $errors->first('dir4') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('dir4') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir4_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="dir4_foto" class="form-control {{ $errors->has('dir4_foto') ? ' form-control-warning' : '' }}" name="dir4_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('dir4_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('dir4_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-dir4_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>
        <h4 class="mt-0 header-title">Crucetas - topes de dirección</h4>
        <div class="form-group row detalles {{ $errors->has('dir5') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir5">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir5_estado" id="dir5_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir5_estado" id="dir5_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="dir5_estado" id="dir5_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('dir5') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir5">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('dir5') ? ' form-control-warning' : '' }}" type="text" id="dir5_descripcion" name="dir5_descripcion">{{old('dir5')}}</textarea>
                @if ($errors->has('dir5'))
                    <div class="col-form-label">
                        {{ $errors->first('dir5') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('dir5') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="dir5_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="dir5_foto" class="form-control {{ $errors->has('dir5_foto') ? ' form-control-warning' : '' }}" name="dir5_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('dir5_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('dir5_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-dir5_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <br>
        <h4 class="mt-0 header-title">Suspensión</h4>
        <h4 class="mt-0 header-title">Amortiguadores</h4>
        <div class="form-group row detalles {{ $errors->has('amo1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="amo1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="amo1_estado" id="amo1_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="amo1_estado" id="amo1_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="amo1_estado" id="amo1_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('amo1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="amo1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('amo1') ? ' form-control-warning' : '' }}" type="text" id="amo1_descripcion" name="amo1_descripcion">{{old('amo1')}}</textarea>
                @if ($errors->has('amo1'))
                    <div class="col-form-label">
                        {{ $errors->first('amo1') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('amo1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="amo1_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="amo1_foto" class="form-control {{ $errors->has('amo1_foto') ? ' form-control-warning' : '' }}" name="amo1_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('dir5_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('dir5_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-amo1_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
            </div>
        </div>

        <h4 class="mt-0 header-title">Muelles delanteros y posterior</h4>
        <div class="form-group row detalles {{ $errors->has('amo2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="amo2">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="amo2_estado" id="amo2_estado" value="1" checked="checked">
                    <i class="helper"></i>Bueno
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="amo2_estado" id="amo2_estado" value="2" >
                    <i class="helper"></i>Regular
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="amo2_estado" id="amo2_estado" value="3" >
                    <i class="helper"></i>Malo
                    </label>
                </div>

            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('amo2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="amo2">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('amo2') ? ' form-control-warning' : '' }}" type="text" id="amo2_descripcion" name="amo2_descripcion">{{old('amo2')}}</textarea>
                @if ($errors->has('amo2'))
                    <div class="col-form-label">
                        {{ $errors->first('amo2') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row detalles {{ $errors->has('amo2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="amo2_foto">
                Foto
            </label>
            <div class="col-sm-8">
                <input type="file" id="amo2_foto" class="form-control {{ $errors->has('amo2_foto') ? ' form-control-warning' : '' }}" name="amo2_foto" accept=".png, .jpg, .jpeg">
                @if ($errors->has('amo2_foto'))
                    <div class="col-form-label">
                        {{ $errors->first('amo2_foto') }}
                    </div>
                @endif
                <h6>Previsualización:</h6><img id="img-amo2_foto" src="/assets/images/default.jpg" style="width:120px;height:120px;" alt="Previsualización" class="img-fluid">
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
        <h4 class="mt-0 header-title">Observaciones</h4>
        <div class="form-group row detalles{{ $errors->has('observaciones') ? ' has-warning' : '' }}">
            <div class="col-sm-12">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="observaciones" name="observaciones">{{old('observaciones')}}</textarea>
                @if ($errors->has('observaciones'))
                    <div class="col-form-label">
                        {{ $errors->first('observaciones') }}
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
@section('js')
    <script>
        function archivoFile(evt) {
            var files = evt.target.files;
            var frame=$("#img-"+evt.target.name);

            if (files.length==0) {
                frame.attr('src','/assets/images/default.jpg');
            }
            else{
                pdffile_url=URL.createObjectURL(files[0]);
                frame.attr('src',pdffile_url);
            }
        }
        document.getElementById('motor1_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor2_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor3_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor4_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor5_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor6_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor7_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor8_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor9_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor10_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor11_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor12_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor13_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor14_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor15_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor16_foto').addEventListener('change', archivoFile, false);
        document.getElementById('motor17_foto').addEventListener('change', archivoFile, false);


    </script>
@endsection
