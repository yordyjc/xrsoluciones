<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de orden de servicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <img class="img-responsive" src="assets/images/membrete.png" alt="" height="145">
        </div>
        <div class="row">
            <h4 class="text-center" style="font-weight: bold;">Reporte de orden de servicio</h4>
		</div>
        <br>
        <table class="table table-bordered" >
            <thead>
                <tr class="text-center">
                    <th scope="col">SITUACIÓN</th>
                    <th scope="col">TRABAJO</th>
                    <th scope="col">MATERIALES </th>
                </tr>
            </thead>
            <tbody>
                @foreach($orden->servicios as $servicio)
                    <tr class="text-center">
                        <td>
                            @if($servicio->estado == 1)
                                Terminado
                            @else
                                Por término
                            @endif
                        </td>
                        <td>{{$servicio->nombre}}</td>
                        <td>
                            @foreach($servicio->materiales as $material)
                            {{$material->nombre}} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>
</html>
