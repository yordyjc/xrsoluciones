@extends('layouts.app')
@section('title')
Editando categoria: {{$categoria->nombre}}
@endsection
@section('content')
<div class="card-body">
	<form action="{{url('/admin/categorias/'.$categoria->id)}}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="tipo">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="1" {{$categoria->estado == 1 ? 'checked="checked"' : ''}}>
                    <i class="helper"></i>Activo
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="0" {{$categoria->estado == 0 ? 'checked="checked"' : ''}}>
                    <i class="helper"></i>Suspendido
                    </label>
                </div>
            </div>
        </div>
		<div class="form-group row {{ $errors->has('nombres') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="nombre">
                Nombre
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('nombres') ? ' form-control-warning' : '' }}" type="text" id="nombre" name="nombre" value="{{$categoria->nombre}}" >
                @if ($errors->has('nombre'))
                    <div class="col-form-label">
                        {{ $errors->first('nombre') }}
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
                        <i class="icofont icofont-save"></i> Actualizar
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
