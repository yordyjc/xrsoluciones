@extends('layouts.app')
@section('title')
Lista de servicios de mantenimiento
@endsection
@php
use Carbon\Carbon;
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
            <a href="{{ url('/admin/servicios/create') }}" class="btn btn-outline-primary waves-effect waves-light btn-lg"> <i class="typcn typcn-document-add"></i> Agregar servicio</a>
        </div>
    </div>
	<div class="card-body">
		<h4 class="mt-0 header-title">Lista de servicios</h4>
		<table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"	>
	        <thead>
	            <tr>
                    <th>Nº</th>
                    <th>Responsable</th>
                    <th>Placa</th>
                    <th>Operación</th>
                    <th>Operador</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acciones</th>
	            </tr>
	          </thead>
	          <tbody>
	          	@if(count($servicios) >0 )
		          	@foreach($servicios as $servicio)
		          	@if($servicio->activo==1)
		            <tr>
                        <td>{{concatenar($servicio->id)}}</td>
						<td>Administrador</td>
						<td>{{$servicio->placa}}</td>
						<td>{{$servicio->operacion}}</td>
						<td>{{$servicio->operador}}</td>
						<td>{{ Carbon::parse($servicio->fecha)->format('d/m/Y') }}</td>
						<td class="text-center"><span class="btn btn-success" data-toggle="tooltip" data-placement="left" data-original-title="Servicio en proceso">En proceso</span></td>
						<td class="text-center">
							<a href="{{url('/admin/servicios/'.$servicio->id)}}">
								<i class="feather icon-eye f-w-600 icon-verde" data-toggle="tooltip" data-placement="left" data-original-title="Ver detalles"></i>
							</a>
							<a href="{{url('admin/reporte/'.$servicio->id)}}">
								<i class="feather icon-download f-w-600 icon-negro" data-toggle="tooltip" data-placement="left" data-original-title="Ver detalles"></i>
							</a>
							<a href="#">
								<i class="feather icon-edit f-w-600 icon-azul" data-toggle="tooltip" data-placement="left" data-original-title="Editar"></i>
							</a>
							<a href="#" onclick="eliminarModal({{ $servicio->id }})"data-toggle="modal" data-target="#eliminarModal">
								<i class="icon feather icon-trash-2 f-w-600 icon-rojo" data-toggle="tooltip" data-placement="left" data-original-title="Eliminar"></i>
							</a>
						</td>
		            </tr>
		            @endif
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

