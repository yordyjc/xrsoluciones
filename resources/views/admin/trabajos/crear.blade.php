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
                Servicio a realizar
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
                Descripción 1
            </label>
            <div class="col-sm-8">
                <textarea  rows="5" class="form-control {{ $errors->has('descripcion') ? ' form-control-danger' : '' }}" id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
                @if ($errors->has('descripcion'))
                <div class="col-form-label">
                    {{ $errors->first('descripcion') }}
                </div>
                @endif
            </div>
        </div>

        <div class="form-group row {{ $errors->has('descripcion2') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="descripcion2">
                Descripción 2
            </label>
            <div class="col-sm-8">
                <textarea  rows="5" class="form-control {{ $errors->has('descripcion2') ? ' form-control-danger' : '' }}" id="descripcion2" name="descripcion2">{{ old('descripcion2') }}</textarea>
                @if ($errors->has('descripcion2'))
                <div class="col-form-label">
                    {{ $errors->first('descripcion2') }}
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

        <div class="form-group row {{ $errors->has('materiales') ? ' has-warning' : '' }}">
            <label for="example-text-input" class="col-sm-4 col-form-label" for="materiales">
                Materiales
            </label>
            <div class="col-sm-6">
                {!! Form::select('materiales',$materiales,old('materiales'),["class"=>"sector form-control form-control-round fill select2 ","required"=>"","id"=>"materiales"]) !!}
                <br>
                <br>
                <div id="tags">
                </div>
                @if ($errors->has('materiales'))
                    <div class="col-form-label">
                        {{ $errors->first('materiales') }}
                    </div>
                @endif

            </div>
            <div class="col-sm-2">
                <a class="btn btn-primary btn-lg" href="#" onclick="crearModal()"data-toggle="modal" data-target="#crearModal">+</a>
            </div>
            <input class="form-control {{ $errors->has('nombre') ? ' form-control-warning' : '' }}" type="hidden" id="materiales_selected" name="materiales_selected">
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
    <div class="modal fade" id="crearModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar material</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('admin/materiales')}}" id="form-submit" onsubmit="return false;" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-form-label" for="materiales">
                                    Material
                                </label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" id="material" name="material">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="icofont icofont-ui-delete"></i>Agregar
                            </button>
                            <button class="btn btn-danger" data-dismiss="modal">
                                <i class="icofont icofont-circled-left"></i> Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
<script>
    $(document).ready(function(){
        $('#materiales').on('change',function(){
            tagMaterial();
        });
    });

    $('#form-submit').submit(function(e){
        e.preventDefault();
        var route = $('#form-submit').attr('action');
        var method = $('#form-submit').attr('method');
        var frmData = $('#form-submit').serialize();
        sendRequest(route, frmData, method, function(data, textStatus){
            if(data.status == 200){
                $("#crearModal").modal('hide');
                swal({
                    title: "Operación realizada con éxito",
                    type:  "success",
                    button: "Cerrar",
                    timer: "3000",
                    backdrop: "rgba(165, 220, 134, 0.45)"
                });

                $('#materiales').empty();
                var html_select = '';
                var data = data.responseJSON;
                for(var i=0; i<data.length; ++i)
                {
                    html_select += '<option value ="'+ data[i].id +'">'+data[i].nombre+'</option>'
                }
                $('#materiales').html(html_select);
                tagMaterial();
            }
        });

    })

    function tagMaterial()
    {
        var materiales_selected = $('#materiales_selected').val();
        materiales_selected += ','+$('#materiales option:selected').val();
        $('#materiales_selected').val(materiales_selected);
        var tags= $('#tags').html();
        tags += '<span class="badge badge-success">'+$('#materiales option:selected').text()+'</span>';
        $('#tags').html(tags);
    }

</script>
@endsection
