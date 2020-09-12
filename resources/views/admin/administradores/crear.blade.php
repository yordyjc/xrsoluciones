@extends('layouts.app')
@section('title')
Nuevo usuario
@endsection

@section('content')
<div class="card-body">
	<form action="{{url('/admin/usuarios')}}" method="post" enctype="multipart/form-data">
		@csrf
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="tipo">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="1" checked="checked">
                    <i class="helper"></i>Activo
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="0">
                    <i class="helper"></i>Suspendido
                    </label>
                </div>
            </div>
        </div>
		<div class="form-group row {{ $errors->has('nombres') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="nombres">
                Nombres
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('nombres') ? ' form-control-warning' : '' }}" type="text" id="nombres" name="nombres" value="{{old('nombres')}}" >
                @if ($errors->has('nombres'))
                    <div class="col-form-label">
                        {{ $errors->first('nombres') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('apellidos') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="apellidos">
                Apellidos
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('apellidos') ? ' form-control-warning' : '' }}" type="text" id="apellidos" name="apellidos" value="{{old('apellidos')}}">
                @if ($errors->has('apellidos'))
                    <div class="col-form-label">
                        {{ $errors->first('apellidos') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('email') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="email">
                Email
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('email') ? ' form-control-warning' : '' }}" type="text" id="email" name="email" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <div class="col-form-label">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('doc') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="doc">
                Nº de Doc de identidad
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('doc') ? ' form-control-warning' : '' }}" type="text" id="doc" name="doc" value="{{old('doc')}}">
                @if ($errors->has('doc'))
                    <div class="col-form-label">
                        {{ $errors->first('doc') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="tipo">
                Tipo de usuario
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tipo" id="tipo" value="1" checked="checked">
                    <i class="helper"></i>Administrador
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="tipo" id="tipo" value="2" >
                    <i class="helper"></i>Trabajador
                    </label>
                </div>
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
