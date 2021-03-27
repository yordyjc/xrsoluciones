@extends('layouts.app')
@section('title')
Nueva orden de trabajo
@endsection


@section('content')
<div class="card-body">
	<form action="{{url('/admin/ordenes')}}" method="post" enctype="multipart/form-data">
		@csrf
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="tipo">
                Estado
            </label>
            <div class="col-md-8 form-radio">
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="0" checked="checked">
                    <i class="helper"></i>En proceso
                    </label>
                </div>
                <div class="form-check-inline my-1">
                    <label>
                    <input type="radio" name="estado" id="estado" value="1">
                    <i class="helper"></i>Concluido
                    </label>
                </div>
            </div>
        </div>
		<div class="form-group row {{ $errors->has('nombre') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="nombre">
                Nombres o razon social
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
                DNI o RUC
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
        <div class="form-group row {{ $errors->has('cel') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="cel">
                Cel.
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

        <div class="form-group row {{ $errors->has('direccion') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="direccion">
                Dirección
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('direccion') ? ' form-control-warning' : '' }}" type="text" id="direccion" name="direccion" value="{{old('direccion')}}">
                @if ($errors->has('direccion'))
                    <div class="col-form-label">
                        {{ $errors->first('direccion') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('tipo') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="tipo">
                Tipo de servicio
            </label>
            <div class="col-sm-8">
                {!! Form::select('tipo',$tipo,old('tipo'),["class"=>"form-control select2 ",'placeholder' => '-- Tipo de servicio --',"required"=>"","id"=>"tipo"]) !!}

                @if ($errors->has('tipo'))
                    <div class="col-form-label">
                        {{ $errors->first('tipo') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('observaciones') ? ' has-warning' : '' }}">
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

        <div class="form-group row {{ $errors->has('horometro') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="horometro">
                Horometro
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('horometro') ? ' form-control-warning' : '' }}" type="number" id="horometro" name="horometro" value="{{old('horometro')}}">
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
            	<input class="form-control {{ $errors->has('kilometraje') ? ' form-control-warning' : '' }}" type="number" id="kilometraje" name="kilometraje" value="{{old('kilometraje')}}">
                @if ($errors->has('kilometraje'))
                    <div class="col-form-label">
                        {{ $errors->first('kilometraje') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('entrega') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="entrega">
                Fecha de entrega
            </label>
            <div class="col-sm-8">
            	<input class="form-control {{ $errors->has('entrega') ? ' form-control-warning' : '' }}" type="date" id="entrega" name="entrega" value="{{old('entrega')}}">
                @if ($errors->has('entrega'))
                    <div class="col-form-label">
                        {{ $errors->first('entrega') }}
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
