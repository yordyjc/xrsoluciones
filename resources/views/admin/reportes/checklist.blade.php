
<!DOCTYPE html>
<html>
<head>
	<title>Reporte de Mantenimiento</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
	<div class="container-fluid" style="font-size: 9px;">
		<div class="row">
			<div class=" title text-center" style="font-size: 11px; font-weight: bold;">Reporte Check List de Mantenimiento</div>
		</div>
		<br>
		<br>
		<div>
			<div class="text-left" style="font-weight: bold;">
				Datos iniciales
			</div>
            <br>
				<table class="table table-sm table-striped">
				<tbody>
					<tr>
					  <th scope="row">Placa</th>
					  <td>{{$servicio->placa}}</td>
                      <th scope="row">Operador</th>
					  <td>{{$servicio->operador}}</td>
                      <th scope="row">Kilometraje</th>
					  <td>{{$servicio->kilometraje}}</td>

					</tr>
					<tr>
					  <th scope="row">Operación</th>
					  <td>{{$servicio->operacion}}</td>
                      <th scope="row">Horometro</th>
					  <td>{{$servicio->horometro}}</td>
                      <th scope="row">Fecha</th>
					  <td>{{$servicio->fecha}}</td>
					</tr>
				</tbody>
			</table>

		</div>

		<div>
			<div class="text-left" style="font-weight: bold;">
				Motor
			</div>
            <br>
            <table class="table table-sm table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Tapa de aceite de motor</th>
                        @if($servicio->motor1_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor1_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Radiador - Tanque de expansión</th>
                        @if($servicio->motor7_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor7_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Fuga de hidrolina</th>
                        @if($servicio->motor13_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor13_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Nivel de aceite de motor</th>
                        @if($servicio->motor2_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor2_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Fajas - templadores - poleas</th>
                        @if($servicio->motor8_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor8_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Fuga de liquido de freno</th>
                        @if($servicio->motor14_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor14_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Nivel de refrigerante</th>
                        @if($servicio->motor3_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor3_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Filtro de aire - manguera -Intercooler</th>
                        @if($servicio->motor9_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor9_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Fuga de combustible</th>
                        @if($servicio->motor15_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor15_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Nivel de hidrolina</th>
                        @if($servicio->motor4_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor4_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Plumillas</th>
                        @if($servicio->motor10_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor10_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Caja de fusibles</th>
                        @if($servicio->motor16_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor16_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                    </tr>
                    <tr>
                        <th scope="row">Nivel de liquido de freno</th>
                        @if($servicio->motor5_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor5_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Fuga de aceite</th>
                        @if($servicio->motor11_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor11_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Batería (bornes libres de sulfato)</th>
                        @if($servicio->motor17_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor17_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="row">Nivel de líquido limpia parabrisas.</th>
                        @if($servicio->motor6_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor6_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Fuga de refrigerante</th>
                        @if($servicio->motor12_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor12_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                    </tr>
                </tbody>
            </table>
		</div>

		<div>
			<div class="text-left" style="font-weight: bold;">
				Transmisión
			</div>
            <br>
            <table class="table table-sm table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Poncho de punta de palier</th>
                        @if($servicio->tran1_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->tran1_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Ruedas (ajuste tuercas 105N-m 77Lb-pie)</th>
                        @if($servicio->tran4_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->tran4_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Llanta de repuesta</th>
                        @if($servicio->tran6_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->tran6_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Llantas (cocada no menor a 4mm.)</th>
                        @if($servicio->tran2_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->tran2_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Roseta (quebrada o suelta)</th>
                        @if($servicio->tran5_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->tran5_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Seguro de tuerca de rueda</th>
                        @if($servicio->tran7_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->tran7_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                    </tr>
                    <tr>
                        <th scope="row">Llantas (presión de aire 35 PSI)</th>
                        @if($servicio->tran3_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->tran3_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                    </tr>
                </tbody>
            </table>
		</div>

		<div>
			<div class="text-left" style="font-weight: bold;">
				Suspención - Frenos
			</div>
            <br>
            <table class="table table-sm table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Amortiguadores</th>
                        @if($servicio->frenos1_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->frenos1_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Pastillas de freno (limpias)</th>
                        @if($servicio->frenos3_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->frenos3_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="row">Muelles posteriores</th>
                        @if($servicio->frenos2_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->frenos2_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                        <th scope="row">Freno de parqueo</th>
                        @if($servicio->frenos4_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->frenos4_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                    </tr>
                </tbody>
            </table>
		</div>
		<div>
			<div class="text-left" style="font-weight: bold;">
				Eléctrico
			</div>
            <br>
            <table class="table table-sm table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Nivel de combustible.</th>
                        @if($servicio->ele1_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->ele1_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Luces -neblineros -Circulina -Pértiga</th>
                        @if($servicio->ele3_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->ele3_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Alarma de retroceso - sirena</th>
                        @if($servicio->ele5_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->ele5_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Relojes - Controles de tablero</th>
                        @if($servicio->ele2_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->ele2_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                        <th scope="row">Interruptor de batería</th>
                        @if($servicio->ele4_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->ele4_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                    </tr>
                </tbody>
            </table>
		</div>

		<div>
			<div class="text-left" style="font-weight: bold;">
				Accesorios
			</div>
            <br>
            <table class="table table-sm table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Gata hidráulica de 2 tn</th>
                        @if($servicio->acce1_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce1_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Conos de seguridad</th>
                        @if($servicio->acce7_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce7_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Inspección técnica MTC vigente</th>
                        @if($servicio->acce13_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce13_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Llave de ruedas</th>
                        @if($servicio->acce2_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce2_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Tacos o cuñas</th>
                        @if($servicio->acce8_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce8_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Manual de operación</th>
                        @if($servicio->acce14_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce14_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Botiquín de primeros auxilios</th>
                        @if($servicio->acce3_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce3_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Extintores PQS de 06 Kg</th>
                        @if($servicio->acce9_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce9_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Cable de remolque</th>
                        @if($servicio->acce15_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce15_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Linterna</th>
                        @if($servicio->acce4_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce4_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Herramientas</th>
                        @if($servicio->acce10_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce10_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Tapiz de asientos</th>
                        @if($servicio->acce16_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->motor16_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Cables de paso de energía</th>
                        @if($servicio->acce5_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce5_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Tarjeta de propiedad - mercancías</th>
                        @if($servicio->acce11_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce11_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Cinturones de seguridad</th>
                        @if($servicio->acce17_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce17_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif


                    </tr>
                    <tr>
                        <th scope="row">Triángulos de seguridad</th>
                        @if($servicio->acce6_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce6_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Soat vigente</th>
                        @if($servicio->acce12_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce12_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif

                        <th scope="row">Choques - raspones</th>
                        @if($servicio->acce18_estado==1)
                            <td>Bueno</td>
                        @elseif($servicio->acce18_estado==2)
                            <td>Regular</td>
                        @else
                            <td>Malo</td>
                        @endif
                    </tr>
                </tbody>
            </table>
		</div>

		<div>
			<div class="card-header" style="font-weight: bold;">
				Observaciones
			</div>
			<div class="card-body">
				<p>
					{{$servicio->observaciones}}
				</p>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        <br>

		<div class="card">
			<table class="table table-borderless" >
			  <tbody>
			    <tr style="font-size:11px; font-weight:bold;">
			      <td class="text-center">Firma Operador</td>
			      <td class="text-center">Firma Mecanico</td>
			      <td class="text-center">Supervisor responsable</td>
			    </tr>
			  </tbody>
			</table>

		</div>
        <div class="page-break"></div>
        <div class="row title text-center" style="font-weight: bold;font-size:12px">
            Motor
        </div>
        <br>
        <br>
        <div class="row">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td>
                            @if($servicio->motor1_foto)
                            <img src="{{url($servicio->motor1_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor2_foto)
                            <img src="{{url($servicio->motor2_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor3_foto)
                            <img src="{{url($servicio->motor3_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($servicio->motor4_foto)
                            <img src="{{url($servicio->motor4_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor5_foto)
                            <img src="{{url($servicio->motor5_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor6_foto)
                            <img src="{{url($servicio->motor6_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($servicio->motor7_foto)
                            <img src="{{url($servicio->motor7_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor8_foto)
                            <img src="{{url($servicio->motor8_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor9_foto)
                            <img src="{{url($servicio->motor9_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($servicio->motor10_foto)
                            <img src="{{url($servicio->motor10_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor11_foto)
                            <img src="{{url($servicio->motor11_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor12_foto)
                            <img src="{{url($servicio->motor12_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($servicio->motor13_foto)
                            <img src="{{url($servicio->motor13_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor14_foto)
                            <img src="{{url($servicio->motor14_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor15_foto)
                            <img src="{{url($servicio->motor15_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($servicio->motor16_foto)
                            <img src="{{url($servicio->motor16_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            @if($servicio->motor17_foto)
                            <img src="{{url($servicio->motor17_foto)}}" alt="" width=200 height="200">
                            @endif
                        </td>
                        <td>
                            
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
       
	</div>

</body>
</html>
