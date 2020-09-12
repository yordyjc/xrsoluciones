@extends('layouts.app')
@section('title')
Nuevo Conductor
@endsection

@section('content')
<div class="card-body">
	<form action="{{url('/admin/conductores/nuevo')}}" method="post" enctype="multipart/form-data">
		@csrf
        <input type="hidden" id="cliente" name="cliente" value="{{$cliente->id}}" >
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="estado">
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

        <div class="form-group row {{ $errors->has('cel') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="cel">
                Celular
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('cel') ? ' form-control-warning' : '' }}" type="text" id="cel" name="cel" value="{{old('cel')}}">
                @if ($errors->has('cel'))
                    <div class="col-form-label">
                        {{ $errors->first('cel') }}
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

        <div class="form-group row {{ $errors->has('doc') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="licencia">
                Clase de licencia
            </label>
            <div class="col-sm-8">
                <select class="form-control {{ $errors->has('licencia') ? ' form-control-warning' : '' }}" name="licencia" id="licencia">
                    <option value="">--Seleccione--</option>
                    <option value="1">A-I</option>
                    <option value="2">A-IIa</option>
                    <option value="3">A-IIb</option>
                    <option value="4">A-IIIa</option>
                    <option value="5">A-IIIb</option>
                    <option value="6">A-IIIc</option>
                    <option value="7">B-I</option>
                    <option value="8">B-IIa</option>
                    <option value="9">B-IIb</option>
                    <option value="10">B-IIc</option>
                </select>
                @if ($errors->has('licencia'))
                    <div class="col-form-label">
                        {{ $errors->first('licencia') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('caducidad') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="caducidad">
                Fecha de caducidad
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('caducidad') ? ' form-control-warning' : '' }}" type="date" id="caducidad" name="caducidad" value="{{old('caducidad')}}">
                @if ($errors->has('caducidad'))
                    <div class="col-form-label">
                        {{ $errors->first('caducidad') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('observaciones') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="observaciones">
                Observaciones
            </label>
            <div class="col-sm-8">
                <textarea row="10" class="form-control {{ $errors->has('observaciones') ? ' form-control-warning' : '' }}" type="text" id="observaciones" name="observaciones">{{old('observaciones')}}</textarea>
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
