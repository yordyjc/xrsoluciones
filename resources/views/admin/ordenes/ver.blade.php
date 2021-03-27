@extends('layouts.app')

@section('title')
    Orden de trabajo
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

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                <div class="text-center">
                    <h4 class="mt-0 header-title">{{'OT/ST/'.concatenar($orden->id)}}</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <dl class="dl-horizontal row mt-2">
                            <dt class="col-sm-3">Estado</dt>
                            <dd class="col-sm-9">
                                @if($orden->estado ==1)
                                    <span class="badge badge-success">Concluido</span>
                                @else
                                    <span class="badge badge-danger">En proceso</span>
                                @endif
                            </dd>
                            <dt class="col-sm-3">Categoria</dt>
                            <dd class="col-sm-9">
                                <span class="badge badge-warning" style="color:#fff;">{{$orden->categoria->nombre}}</span>
                            </dd>

                            <dt class="col-sm-3">Cliente</dt>
                            <dd class="col-sm-9">{{$orden->cliente->nombres}}</dd>

                            <dt class="col-sm-3">Equipo</dt>
                            <dd class="col-sm-9">{{$orden->equipo}}</dd>

                            <dt class="col-sm-3">Horometro</dt>
                            <dd class="col-sm-9">{{$orden->horometro}}</dd>

                            <dt class="col-sm-3">Kilometraje</dt>
                            <dd class="col-sm-9">{{$orden->kilometraje}}</dd>

                            <dt class="col-sm-3">Fecha de registro</dt>
                            <dd class="col-sm-9">{{Carbon::parse($orden->created_at)->format('d \d\e M. \d\e Y')}}</dd>

                            <dt class="col-sm-3">Fecha de entrega</dt>
                            <dd class="col-sm-9">{{Carbon::parse($orden->entrega)->format('d \d\e M. \d\e Y')}}</dd>
                            <dd class="col-sm-12 offset-sm-3 text-muted">({{ Carbon::parse($orden->updated_at)->diffForHumans(null, false, false, 2) }})</dd>
                        </dl>
                    </div>
                    <div class="col-sm-7 table-responsive">
                        <table class="table table-bordered table-hover dataTable no-footer text-center">
                            <thead>
                                <tr>
                                    <th colspan="4">Lista de Checklist</th>
                                </tr>
                                <tr>
                                    <th>Nº</th>
                                    <th>Responsable</th>
                                    <th>Tipo</th>
                                    <th>Placa</th>
                                    <th>Operacion</th>
                                    <th>Operador</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($orden->checklists->count() >0)
                                @foreach($orden->checklists as $checklist)
                                    <tr>
                                        <td>{{concatenar($checklist->id)}}</td>
                                        <td>
                                            Administrador
                                            <p class="text-muted m-b-0">Registrado el {{ Carbon::parse($checklist->created_at)->format('d/m/Y h:i a') }}</p>
                                        </td>
                                        <td>
                                        @switch($checklist->tipo)
                                            @case (1)
                                            <span class="badge badge-warning" style="color:#fff;">Camioneta</span>
                                            @break
                                        @endswitch
                                        </td>
                                        <td>{{$checklist->placa}}</td>
                                        <td>{{$checklist->operacion}}</td>
                                        <td>{{$checklist->operador}}</td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        </br>
                        <div class="form-group row">
                            <div class="col-md-4">
                            <a href="{{ url('/admin/checklists/camioneta/'.$orden->id) }}" class="btn btn-outline-primary waves-effect waves-light btn-lg"><i class="typcn typcn-document-add"></i>Checklist Camioneta</a>

                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn btn-outline-primary waves-effect waves-light btn-lg"><i class="typcn typcn-document-add"></i>Checklist ..</a>

                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn btn-outline-primary waves-effect waves-light btn-lg"><i class="typcn typcn-document-add"></i>Checklist ..</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="mt-0 header-title">Archivos agregados</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover dataTable no-footer text-center">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>nombre</th>
                                        <th>Descripción</th>
                                        <th>Descargar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orden->documentos as $documento)
                                    <tr>
                                        <td>{{concatenar($documento->id)}}</td>
                                        <td>
                                            {{$documento->nombre}}
                                            <p class="text-muted m-b-0">Registrado el {{ Carbon::parse($documento->created_at)->format('d/m/Y h:i a') }}</p>
                                        </td>
                                        <td>{{$documento->descripcion}}</td>
                                        <td>
                                            <a href="{{$documento->archivo}}"><i class="feather icon-download f-w-600 icon-negro"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </br>
                            <div class="form-group row">
                                <div class="col-md-4">
                                <a href="{{ url('/admin/archivo/'.$orden->id) }}" class="btn btn-outline-primary waves-effect waves-light btn-lg"><i class="typcn typcn-document-add"></i>Agregar documento</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h4 class="mt-0 header-title">Servicios realizados</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover dataTable no-footer text-center">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>nombre</th>
                                        <th>Descricpión</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orden->servicios as $servicio)
                                    <tr>
                                        <td>{{concatenar($servicio->id)}}</td>
                                        <td>
                                            {{$servicio->nombre}}
                                            <p class="text-muted m-b-0">Registrado el {{ Carbon::parse($servicio->created_at)->format('d/m/Y h:i a') }}</p>
                                        </td>
                                        <td>
                                            {{$servicio->descripcion}}
                                        </td>
                                        <td>{{$servicio->precio}}</td>
                                        <td>
                                        <a href="{{url('admin/servicios/'.$servicio->id.'/edit')}}">
                                            <i class="icon feather icon-edit f-w-600 icon-azul" data-toggle="tooltip" data-placement="left" data-original-title="Cambiar estado"></i>
                                        </a>
                                        <a href="#">
                                            <i class="icon feather icon-trash-2 f-w-600 icon-rojo" data-toggle="tooltip" data-placement="left" data-original-title="Eliminar"></i>
                                        </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </br>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <a href="{{ url('/admin/servicio/'.$orden->id) }}" class="btn btn-outline-primary waves-effect waves-light btn-lg"><i class="typcn typcn-document-add"></i>Agregar servicio</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
