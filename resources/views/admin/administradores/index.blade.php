@extends('layouts.app')
@section('title')
Lista de Usuarios
@endsection
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

@section('content')
    <div class="card-header ">
        <div class="text-right">
            <a href="{{ url('/admin/usuarios/create') }}" class="btn btn-outline-primary waves-effect waves-light btn-lg"> <i class="typcn typcn-user-add"></i> Agregar administrador</a>
        </div>
    </div>
	<div class="card-body">
		<table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"	>
	        <thead>
	            <tr>
	              <th>Nº</th>
	              <th>Nombres</th>
	              <th>Correo</th>
	              <th>Nº Doc de identidad</th>
	              <th>Estado</th>
                  <th>Tipo</th>
	              <th>Acciones</th>
	            </tr>
	          </thead>
	          <tbody>
	          	@if(count($usuarios) >0 )
		          	@foreach($usuarios as $usuario)
                        <tr>
                            <td>{{concatenar($usuario->id)}}</td>
                            <td>{{$usuario->nombres}} {{$usuario->apellidos}}
                            <p class="text-muted m-b-0">Registrado el {{ Carbon::parse($usuario->created_at)->format('d/m/Y h:i a') }}</p>
                            </td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->doc}}</td>
                            @if($usuario->estado == 1)
                            <td class="text-center"><h5><span class="badge badge-success">Activo</span></h5></td>
                            @else
                            <td class="text-center"><h5><span class="badge badge-danger">Suspendido</span></h5></td>
                            @endif
                            @if($usuario->tipo==1)
                            <td class="text-center"><h5><span class="badge badge-success">Administrador</span></h5></td>
                            @elseif($usuario->tipo==2)
                            <td class="text-center"><h5><span class="badge badge-primary">Trabajador</span></h5></td>
                            @else
                            <td class="text-center"><h5><span class="badge badge-warning">Cliente</span></h5></td>
                            @endif
                            <td class="text-center">
                                <a href="{{url('/admin/usuarios/'.$usuario->id.'/edit')}}">
                                    <i class="feather icon-edit f-w-600 icon-azul" data-toggle="tooltip" data-placement="left" data-original-title="Editar"></i>
                                </a>
                                @if($usuario->estado==1)
                                <a href="#" onclick="eliminarModal({{ $usuario->id }})"data-toggle="modal" data-target="#eliminarModal">
                                    <i class="icon feather icon-trash-2 f-w-600 icon-rojo" data-toggle="tooltip" data-placement="left" data-original-title="Eliminar"></i>
                                </a>
                                @endif
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
                                            <i class="icofont icofont-ui-delete"></i>Sí, eliminar servicio
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
<script type="text/javascript">
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
    function eliminarModal(id){
        var formModal=$("#form-modal");
        var url=location.origin;
        var path=location.pathname
        formModal.attr('action',url+path+'/'+id);
    }
  </script>
@endsection

