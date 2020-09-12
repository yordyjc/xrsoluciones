@extends('layouts.app')
@section('title')
Editando {{$cliente->nombres}}
@endsection

@section('content')
<div class="card-body">
	<form action="{{url('/admin/clientes/'.$cliente->id)}}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="tipo">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="1" {{$cliente->estado == 1 ? 'checked = "checked"' : ''}}>
                    <i class="helper"></i>Activo
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="0" {{$cliente->estado == 0 ? 'checked = "checked"' : ''}}>
                    <i class="helper"></i>Suspendido
                    </label>
                </div>
            </div>
        </div>
		<div class="form-group row {{ $errors->has('nombres') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="nombres">
                Nombres o razon social
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('nombres') ? ' form-control-warning' : '' }}" type="text" id="nombres" name="nombres" value="{{$cliente->nombres}}" >
                @if ($errors->has('nombres'))
                    <div class="col-form-label">
                        {{ $errors->first('nombres') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('email') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="email">
                Email
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('email') ? ' form-control-warning' : '' }}" type="text" id="email" name="email" value="{{$cliente->email}}">
                @if ($errors->has('email'))
                    <div class="col-form-label">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('doc') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="doc">
                DNI o RUC
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('doc') ? ' form-control-warning' : '' }}" type="text" id="doc" name="doc" value="{{$cliente->doc}}">
                @if ($errors->has('doc'))
                    <div class="col-form-label">
                        {{ $errors->first('doc') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('cel') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="cel">
                Cel.
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('cel') ? ' form-control-warning' : '' }}" type="text" id="cel" name="cel" value="{{$cliente->cel}}">
                @if ($errors->has('cel'))
                    <div class="col-form-label">
                        {{ $errors->first('cel') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('direccion') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="direccion">
                Dirección
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('direccion') ? ' form-control-warning' : '' }}" type="text" id="direccion" name="direccion" value="{{$cliente->direccion}}">
                @if ($errors->has('direccion'))
                    <div class="col-form-label">
                        {{ $errors->first('direccion') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('observaciones') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="observaciones">
                Observaciones
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('observaciones') ? ' form-control-warning' : '' }}" type="text" id="observaciones" name="observaciones" value="{{$cliente->observaciones}}">
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
