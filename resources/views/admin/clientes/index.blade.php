@extends('layouts.app')
@section('title')
Lista de clientes
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
            <a href="{{ url('/admin/clientes/create') }}" class="btn btn-outline-primary waves-effect waves-light btn-lg"> <i class="typcn typcn-user-add"></i> Agregar cliente</a>
        </div>
    </div>
	<div class="card-body">
		<table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"	>
	        <thead>
	            <tr>
	              <th>Nº</th>
	              <th>Nombres o Razon social</th>
	              <th>Correo</th>
	              <th>DNI 0 RUC</th>
	              <th>cel</th>
                  <th>Estado</th>
	              <th>Acciones</th>
	            </tr>
	          </thead>
	          <tbody>
	          	@if(count($clientes) >0 )
		          	@foreach($clientes as $cliente)
                        <tr>
                            <td>{{concatenar($cliente->id)}}</td>
                            <td>{{$cliente->nombres}}
                            <p class="text-muted m-b-0">Registrado el {{ Carbon::parse($cliente->created_at)->format('d/m/Y h:i a') }}</p>
                            </td>
                            <td>{{$cliente->email}}</td>
                            <td>{{$cliente->doc}}</td>
                            <td>{{$cliente->cel}}</td>
                            @if($cliente->estado == 1)
                            <td class="text-center"><h5><span class="badge badge-success">Activo</span></h5></td>
                            @else
                            <td class="text-center"><h5><span class="badge badge-danger">Suspendido</span></h5></td>
                            @endif
                            <td class="text-center">
                                @if($cliente->estado==1)
                                <a href="{{url('/admin/conductores/'.$cliente->id)}}">
                                    <i class="icon feather icon-plus-circle f-w-600 icon-azul" data-toggle="tooltip" data-placement="left" data-original-title="Agregar chofer"></i>
                                </a>
                                <a href="{{url('/admin/clientes/'.$cliente->id)}}">
                                    <i class="feather icon-eye f-w-600 icon-verde" data-toggle="tooltip" data-placement="left" data-original-title="Ver detalles"></i>
                                </a>
                                @endif
                                <a href="{{url('/admin/clientes/'.$cliente->id.'/edit')}}">
                                    <i class="feather icon-edit f-w-600 icon-azul" data-toggle="tooltip" data-placement="left" data-original-title="Editar"></i>
                                </a>
                                @if($cliente->estado==1)
                                <a href="#" onclick="eliminarModal({{ $cliente->id }})"data-toggle="modal" data-target="#eliminarModal">
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

