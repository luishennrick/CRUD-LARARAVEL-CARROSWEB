<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carros Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Lista de Veiculos</h2>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Renavam</th>
                    <th>Placa</th>
                    <th>Proprietario</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>

                @foreach($veiculos)
                @php


                <tr>
                    <td>{{$veiculos->marca}}</td>
                    <td>{{$veiculos->modelo}}</td>
                    <td>{{$veiculos->ano}}</td>
                    <td>{{$veiculos->Renavam}}</td>
                    <td>{{$veiculos->placa}}</td>
                    <td>{{$veiculos->proprietario}}</td>
                    <td>{{$veiculos->email}}</td>

                </tr>
                @foreachend
            </tbody>
        </table>
    </div>

</body>

</html>
