@extends('layouts.app')
@section('title')
Editar Conductor
@endsection

@section('content')
<div class="card-body">
	<form action="{{url('/admin/conductores/'.$conductor->id)}}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')
		<div class="form-group row {{ $errors->has('nombres') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="nombres">
                Nombres
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('nombres') ? ' form-control-warning' : '' }}" type="text" id="nombres" name="nombres" value="{{$conductor->nombres}}" >
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
            	<input class="form-control {{ $errors->has('apellidos') ? ' form-control-warning' : '' }}" type="text" id="apellidos" name="apellidos" value="{{$conductor->apellidos}}">
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
            	<input class="form-control {{ $errors->has('email') ? ' form-control-warning' : '' }}" type="text" id="email" name="email" value="{{$conductor->email}}">
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
            	<input class="form-control {{ $errors->has('cel') ? ' form-control-warning' : '' }}" type="text" id="cel" name="cel" value="{{$conductor->cel}}">
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
            	<input class="form-control {{ $errors->has('doc') ? ' form-control-warning' : '' }}" type="text" id="doc" name="doc" value="{{$conductor->doc}}">
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
                    <option value="1" {{$conductor->licencia==1 ? 'selected' : ''}}>A-I</option>
                    <option value="2" {{$conductor->licencia==2 ? 'selected' : ''}}>A-IIa</option>
                    <option value="3" {{$conductor->licencia==3 ? 'selected' : ''}}>A-IIb</option>
                    <option value="4" {{$conductor->licencia==4 ? 'selected' : ''}}>A-IIIa</option>
                    <option value="5" {{$conductor->licencia==5 ? 'selected' : ''}}>A-IIIb</option>
                    <option value="6" {{$conductor->licencia==6 ? 'selected' : ''}}>A-IIIc</option>
                    <option value="7" {{$conductor->licencia==7 ? 'selected' : ''}}>B-I</option>
                    <option value="8" {{$conductor->licencia==8 ? 'selected' : ''}}>B-IIa</option>
                    <option value="9" {{$conductor->licencia==9 ? 'selected' : ''}}>B-IIb</option>
                    <option value="10" {{$conductor->licencia==10 ? 'selected' : ''}}>B-IIc</option>
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
            	<input class="form-control {{ $errors->has('caducidad') ? ' form-control-warning' : '' }}" type="date" id="caducidad" name="caducidad" value="{{$conductor->caducidad}}">
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
                <textarea row="10" class="form-control {{ $errors->has('observaciones') ? ' form-control-warning' : '' }}" type="text" id="observaciones" name="observaciones">{{$conductor->observaciones}}</textarea>
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
