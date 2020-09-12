@extends('layouts.app')

@section('title')
    Perfil de cliente
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
    <div class="card-header ">
        <div class="text-left">
            <h4 class="mt-0 header-title">@yield('title')</h4>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <center><img class="rounded-circle align-top img-thumbnail" src="{{$cliente->foto ? $cliente->foto : url('assets/images/users/avatar-1.jpg')}}" width="300px" height="300px"></center>
            </div>
            <div class="col-sm-6">
                <dl class="dl-horizontal row mt-2">
                    <dt class="col-sm-3">Nombres</dt>
                    <dd class="col-sm-9">
                        {{$cliente->nombres}}
                    </dd>
                    <dt class="col-sm-3">Correo</dt>
                    <dd class="col-sm-9">{{$cliente->email}}</dd>

                    <dt class="col-sm-3">Celular</dt>
                    <dd class="col-sm-9">{{$cliente->cel}}</dd>

                    <dt class="col-sm-3">Dirección</dt>
                    <dd class="col-sm-9">{{$cliente->direccion}}</dd>

                    <dt class="col-sm-3">DNI/RUC</dt>
                    <dd class="col-sm-9">{{$cliente->doc}}</dd>

                    <dt class="col-sm-3">Observaciones</dt>
                    <dd class="col-sm-9">{{$cliente->observaciones}}</dd>

                    <dt class="col-sm-3">Registrado</dt>
                    <dd class="col-sm-9">{{Carbon::parse($cliente->created_at)->format('d \d\e M. \d\e Y')}}</dd>

                    <dt class="col-sm-3">Modificado</dt>
                    <dd class="col-sm-9">{{Carbon::parse($cliente->updated_at)->format('d \d\e M. \d\e Y')}}</dd>
                    <dd class="col-sm-12 offset-sm-3 text-muted">({{ Carbon::parse($cliente->updated_at)->diffForHumans(null, false, false, 2) }})</dd>
                </dl>

            </div>
        </div>
    </div>

    <div class="card-header">
        <div class="text-left">
            <h4 class="mt-0 header-title">Conductores</h4>
        </div>
    </div>
    <div class="card-body">
        <table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"	>
	        <thead>
	            <tr>
	              <th>Nombres</th>
	              <th>Correo</th>
	              <th>Doc. de identidad</th>
                  <th>Celular</th>
	              <th>Licencia</th>
                  <th>Fecha de caducidad</th>
	              <th>Acciones</th>
	            </tr>
	          </thead>
	          <tbody>
	          	@if(count($cliente->conductores) >0 )
		          	@foreach($cliente->conductores as $conductor)
                        <tr>
                            <td>{{$conductor->nombres}} {{$conductor->apellidos}}
                            <p class="text-muted m-b-0">Registrado el {{ Carbon::parse($conductor->created_at)->format('d/m/Y') }}</p>
                            </td>
                            <td>{{$conductor->email}}</td>
                            <td>{{$conductor->doc}}</td>
                            <td>{{$conductor->cel}}</td>
                            <td class="text-center">
                                @switch($conductor->licencia)
                                    @case(1)
                                        <span class="badge badge-primary">AI</span>
                                        @break
                                    @case(2)
                                        <span class="badge badge-primary">A-IIa</span>
                                        @break
                                    @case(3)
                                        <span class="badge badge-primary">A-IIb</span>
                                        @break
                                    @case(4)
                                        <span class="badge badge-primary">A-IIIa</span>
                                        @break
                                    @case(5)
                                        <span class="badge badge-primary">A-IIIb</span>
                                        @break
                                    @case(6)
                                        <span class="badge badge-primary">A-IIIc</span>
                                        @break
                                    @case(7)
                                        <span class="badge badge-primary">B-I</span>
                                        @break
                                    @case(8)
                                        <span class="badge badge-primary">B-IIa</span>
                                        @break
                                    @case(9)
                                        <span class="badge badge-primary">B-IIb</span>
                                        @break
                                    @case(10)
                                        <span class="badge badge-primary">B-IIc</span>
                                        @break
                                @endswitch

                            </td>
                            <td>{{Carbon::parse($conductor->caducidad)->format('d \d\e M. \d\e Y')}}</td>
                            <td class="text-center">
                                <a href="{{url('/admin/conductores/'.$conductor->id.'/edit')}}">
                                    <i class="feather icon-edit f-w-600 icon-azul" data-toggle="tooltip" data-placement="left" data-original-title="Editar"></i>
                                </a>
                            </td>
                        </tr>
		            @endforeach
		            <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">¡Alto!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="POST" id="form-modal">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        <p>Esta acción no podrá deshacerse. ¿Quieres continuar?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="icofont icofont-ui-delete"></i>Sí, suspender cliente
                                        </button>
                                        <button class="btn btn-primary" data-dismiss="modal">
                                            <i class="icofont icofont-circled-left"></i> Cancelar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
	            @endif
	        </tbody>
	    </table>
    </div>

@endsection

@section('js')
<script>
    $(document).ready( function () {
        $('#datatable2').DataTable({
            "paging":    true,
            "info":      true,
            // "searching": false,
            "language": {
                "lengthMenu": "Mostrar  _MENU_  registros por página",
                "zeroRecords": "Ningún registro encontrado",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Sin registros",
                "infoFiltered": "(búsqueda realizada en _MAX_  registros)",
                "search": "Buscar: ",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente"
                }
            },
            "order":[]
        });
    });
</script>
@endsection
