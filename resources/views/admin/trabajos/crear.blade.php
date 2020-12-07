@extends('layouts.app')
@section('title')
Nuevo servicio
@endsection


@section('content')
<div class="card-body">
	<form action="{{url('/admin/servicios')}}" method="post" enctype="multipart/form-data">
		@csrf
        <input type="hidden" id="orden" name="orden" value="{{$orden}}" >
		<div class="form-group row {{ $errors->has('nombre') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="nombre">
                Nombres
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('nombre') ? ' form-control-warning' : '' }}" type="text" id="nombre" name="nombre" value="{{old('nombre')}}" >
                @if ($errors->has('nombre'))
                    <div class="col-form-label">
                        {{ $errors->first('nombre') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('descripcion') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="descripcion">
                Descripción
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('descripcion') ? ' form-control-warning' : '' }}" type="text" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
                @if ($errors->has('descripcion'))
                    <div class="col-form-label">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('precio') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="precio">
                Precio
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('precio') ? ' form-control-warning' : '' }}" type="number" id="precio" name="precio" value="{{old('precio')}}">
                @if ($errors->has('precio'))
                    <div class="col-form-label">
                        {{ $errors->first('precio') }}
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });

    $( ".select2" ).select2({
        theme: "bootstrap4"
    });
</script>
@endsection
