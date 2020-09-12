@extends('layouts.app')
@section('title')
Servicio Nº {{concatenar($servicio->id)}}
@endsection

@section('content')
@php
use Carbon\Carbon;
setlocale(LC_TIME, 'es_ES.UTF-8');
Carbon::setLocale('es');

function concatenar($numero){
    $n=strlen($numero);
    if ($n==1) {
        $a='0000'.$numero;
    }
    else if ($n==2) {
        $a='000'.$numero;
    }
    else if ($n==3) {
        $a='00'.$numero;
    }
    else if ($n==4) {
        $a='0'.$numero;
    }
    else{
        $a=$numero;
    }
    return $a;
}
@endphp
<div class="card-body">
	<h4 class="mt-0 header-title">Datos iniciales</h4>
		@csrf
		<div class="form-group row {{ $errors->has('placa') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="placa">
                Placa
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('placa') ? ' form-control-warning' : '' }}" type="text" id="placa" name="placa" value="{{$servicio->placa}}" disabled>
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
            	<input class="form-control {{ $errors->has('operacion') ? ' form-control-warning' : '' }}" type="text" id="operacion" name="operacion" value="{{$servicio->operacion}}" disabled>
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
            	<input class="form-control {{ $errors->has('operador') ? ' form-control-warning' : '' }}" type="text" id="operador" name="operador" value="{{$servicio->operador}}" disabled>
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
            	<input class="form-control {{ $errors->has('horometro') ? ' form-control-warning' : '' }}" type="text" id="horometro" name="horometro" value="{{$servicio->horometro}}" disabled>
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
            	<input class="form-control {{ $errors->has('kilometraje') ? ' form-control-warning' : '' }}" type="text" id="kilometraje" name="kilometraje" value="{{$servicio->kilometraje}}" disabled>
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
            	<input class="form-control {{ $errors->has('fecha') ? ' form-control-warning' : '' }}" type="date" id="fecha" name="fecha" value="{{$servicio->fecha}}"disabled>
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
            	@if($servicio->estado_op_1==1)
                <div class="form-check-inline my-1">
                    <span class="btn btn-info" data-toggle="tooltip" data-placement="left" data-original-title="Servicio en proceso">SI</span>
                </div>
                @else
                <div class="form-check-inline my-1">
                    <span class="btn btn-danger" data-toggle="tooltip" data-placement="left" data-original-title="Servicio en proceso">NO</span>
                </div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado-op-2">
                Mi estado de alerta y capacidad de respuesta estan en buenas condiciones (No influencia por Alcohol, drogas o medicamentos).
            </label>
            <div class="col-md-8 form-radio">
                @if($servicio->estado_op_2==1)
                <div class="form-check-inline my-1">
                    <span class="btn btn-info" data-toggle="tooltip" data-placement="left" data-original-title="Servicio en proceso">SI</span>
                </div>
                @else
                <div class="form-check-inline my-1">
                    <span class="btn btn-danger" data-toggle="tooltip" data-placement="left" data-original-title="Servicio en proceso">NO</span>
                </div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado-op-3">
                Estoy consiente de la responsabilidad que significa conducir u operar vehiculo u equipo.
            </label>
            <div class="col-md-8 form-radio">
                @if($servicio->estado_op_3==1)
                <div class="form-check-inline my-1">
                    <span class="btn btn-info" data-toggle="tooltip" data-placement="left" data-original-title="Estado del operador">SI</span>
                </div>
                @else
                <div class="form-check-inline my-1">
                    <span class="btn btn-danger" data-toggle="tooltip" data-placement="left" data-original-title="Servicio en proceso">NO</span>
                </div>
                @endif
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
            	@if ($servicio->motor1_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor1_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor1_descripcion" name="motor1_descripcion" disabled>{{$servicio->motor1_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de aceite de motor.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor2_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor2_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif

            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor2_descripcion" name="motor2_descripcion" disabled>{{$servicio->motor2_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de refrigerante.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor3_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor3_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor3_descripcion" name="motor3_descripcion" disabled>{{$servicio->motor3_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de hidrolina.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor4_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor4_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor4_descripcion" name="motor4_descripcion" disabled>{{$servicio->motor4_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de liquido de freno.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor5_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor5_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor5_descripcion" name="motor5_descripcion" disabled>{{$servicio->motor5_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Nivel de líquido limpia parabrisas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor6_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor6_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor6_descripcion" name="motor6_descripcion" disabled>{{$servicio->motor6_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Radiador - Tanque de expansión.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor7_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor7_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor7_descripcion" name="motor7_descripcion" disabled>{{$servicio->motor7_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Fajas - templadores - poleas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor8_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor8_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor8_descripcion" name="motor8_descripcion" disabled>{{$servicio->motor8_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Filtro de aire - manguera -Intercooler.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor9_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor9_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor9_descripcion" name="motor9_descripcion" disabled>{{$servicio->motor9_descipcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Plumillas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor10_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor0_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor10_descripcion" name="motor10_descripcion" disabled>{{$servicio->motor10_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de aceite.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor11_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor11_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor11_motor12-estado" name="motor11_motor12-estado" disabled>{{$servicio->motor11_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de refrigerante..</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor12_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor12_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor12_descripcion" name="motor12_descripcion" disabled>{{$servicio->motor12_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de hidrolina.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor13_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor13_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor13_descripcion" name="motor13_descripcion" disabled>{{$servicio->motor13_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de liquido de freno.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor14_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor14_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor14_descripcion" name="motor14_descripcion" disabled>{{$servicio->mot0r14_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Fuga de combustible.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor15_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor15_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor15_descripcion" name="motor15_descripcion" disabled>{{$servicio->motro15_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Caja de fusibles.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor16_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor16_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor16_descripcion" name="motor16_descripcion" disabled>{{$servicio->motor16_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Batería (bornes libres de sulfato).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->motor17_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->motor17_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="motor17_descripcion" name="motor17_descripcion" disabled>{{$servicio->motor17_descripcion}}</textarea>
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
                @if ($servicio->tran1_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->tran1_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran1_descripcion" name="tran1_descripcion" disabled>{{$servicio->tran1_descripcion}}</textarea>
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Llantas (cocada no menor a 4mm.).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->tran2_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->tran2_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>

        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran2_descipcion" name="tran2_descipcion" disabled>{{$servicio->tran1_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Llantas (presión de aire 35 PSI).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->tran3_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->tran3_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran3_descripcion" name="tran3_descripcion" disabled>{{$servicio->tran3_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Ruedas (ajuste tuercas 105N-m 77Lb-pie).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->tran4_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->tran4_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran4_descripcion" name="tran4_descripcion" disabled>{{$servicio->tran4_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Roseta (quebrada o suelta).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->tran5_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->tran5_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran5_descripcion" name="tran5_descripcion" disabled>{{$servicio->tran5_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Llanta de repuesta.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->tran6_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->tran6_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran6_descripcion" name="tran6_descripcion" disabled>{{$servicio->tran6_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Seguro de tuerca de rueda.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->tran7_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->tran7_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="tran7_descripcion" name="tran7_descripcion" disabled>{{$servicio->tran7_descripcion}}</textarea>
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
                @if ($servicio->frenos1_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->frenos1_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos1_descripcion" name="frenos1_descripcion" disabled>{{$servicio->frenos1_descripcion}}</textarea>
            </div>
        </div>

                <h4 class="mt-0 header-title">Muelles posteriores.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->frenos2_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->frenos2_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos2_descripcion" name="frenos2_descripcion" disabled>{{$servicio->frenos2_descripcion}}</textarea>
            </div>
        </div>

                <h4 class="mt-0 header-title">Pastillas de freno (limpias).</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->frenos3_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->frenos3_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos3_descripcion" name="frenos3_descripcion" disabled>{{$servicio->frenos3_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Freno de parqueo.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->frenos4_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->frenos4_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="frenos4_descripcion" name="frenos4_descripcion" disabled>{{$servicio->frenos4_descripcion}}</textarea>
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
                @if ($servicio->ele1_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->ele1_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele1_descripcion" name="ele1_descripcion" disabled>{{$servicio->ele1_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Relojes - Controles de tablero.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->ele2_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->ele2_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele2_descripcion" name="ele2_descripcion" disabled>{{$servicio->ele2_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Luces -neblineros -Circulina -Pértiga.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->ele3_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->ele3_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele3_descripcion" name="ele3_descripcion" disabled>{{$servicio->ele3_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Interruptor de batería.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->ele4_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->ele4_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele4_descripcion" name="ele4_descripcion" disabled>{{$servicio->ele4_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Alarma de retroceso - sirena.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->ele5_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->ele5_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="ele5_descripcion" name="ele5_descripcion" disabled>{{$servicio->ele5_descripcion}}</textarea>
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
               @if ($servicio->acce1_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce1_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce1_descripcion" name="acce1_descripcion" disabled>{{$servicio->acce1_descripcion}}</textarea>
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Llave de ruedas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce2_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce2_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce2_descripcion" name="acce2_descripcion" disabled>{{$servicio->acce2_descripcion}}</textarea>
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Botiquín de primeros auxilios</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce3_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce3_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce3_descripcion" name="acce3_descripcion" disabled>{{$servicio->acce3_descripcion}}</textarea>
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Linterna.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce4_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce4_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce4_descripcion" name="acce4_descripcion" disabled>{{$servicio->acce4_descripcion}}</textarea>
            </div>
        </div>
        
        <h4 class="mt-0 header-title">Cables de paso de energía.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce5_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce5_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce5_descripcion" name="acce5_descripcion" disabled>{{$servicio->acce5_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Triángulos de seguridad.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
               @if ($servicio->acce6_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce6_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce6_descripcion" name="acce6_descripcion" disabled>{{$servicio->acce6_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Conos de seguridad.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
               @if ($servicio->acce7_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce7_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce7_descripcion" name="acce7_descripcion" disabled>{{$servicio->acce7_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Tacos o cuñas .</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                 @if ($servicio->acce8_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce8_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce8_descripcion" name="acce8_descripcion" disabled>{{$servicio->acce8_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Extintores PQS de 06 Kg.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce9_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce9_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce9_descripcion" name="acce9_descripcion" disabled>{{$servicio->acce9_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Herramientas.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce10_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce10_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce10_descripcion" name="acce10_descripcion" disabled>{{$servicio->acce10_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Tarjeta de propiedad - mercancías.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce11_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce11_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce11_descripcion" name="acce11_descripcion" disabled>{{$servicio->acce11_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Soat vigente.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce12_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce12_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce12_descripcion" name="acce12_descripcion" disabled>{{$servicio->acce12_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Inspección técnica MTC vigente.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce13_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce13_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce13_descripcion" name="acce13_descripcion" disabled>{{$servicio->acce13_desripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Manual de operación.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce14_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce14_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce14_descripcion" name="acce14_descripcion" disabled>{{$servicio->acce14_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Cable de remolque.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce15_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce15_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce15_descripcion" name="acce15_descripcion" disabled>{{$servicio->acce15_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Tapiz de asientos.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce16_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce16_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce16_descripcion" name="acce16_descripcion" disabled>{{$servicio->acce16_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Cinturones de seguridad.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce17_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce17_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce17_descripcion" name="acce17_descripcion" disabled>{{$servicio->acce17_descripcion}}</textarea>
            </div>
        </div>

        <h4 class="mt-0 header-title">Choques - raspones.</h4>
        <div class="form-group row detalles {{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                @if ($servicio->acce18_estado==1)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-info" data-toggle="tooltip" data-placement="left">Bueno</span>
                	</div>
				@elseif ($servicio->acce18_estado==2)
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Regular</span>
                	</div>
				@else
				    <div class="form-check-inline my-1">
                    	<span class="btn btn-success" data-toggle="tooltip" data-placement="left">Malo</span>
                	</div>
				@endif
            </div>
        </div>     
        <div class="form-group row detalles{{ $errors->has('motor1') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="motor1">
                Descripción
            </label>

            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="acce18_descripcion" name="acce18_descripcion" disabled>{{$servicio->acce18_desripcion}}</textarea>
            </div>
        </div>
        <br>
        <h4 class="mt-0 header-title">Observaciones</h4>   
        <div class="form-group row detalles{{ $errors->has('observaciones') ? ' has-warning' : '' }}">
            <div class="col-sm-12">
                <textarea row="10" class="form-control {{ $errors->has('motor1') ? ' form-control-warning' : '' }}" type="text" id="observaciones" name="observaciones" disabled>{{$servicio->observaciones}}</textarea>
            </div>
        </div>
</div>

@endsection