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

        <form class="well form-horizontal" action="{{ route('veiculos.store') }}" method="post" id="contact_form">
            <fieldset>


                <legend>
                    <center>
                        <h2><b>Cadastro de Veículos</b></h2>
                    </center>
                </legend><br>



                <div class="form-group">
                    <label class="col-md-4 control-label">Marca</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="Marca" placeholder="Ex:Porshe" class="form-control" type="text">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label">Modelo</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="Modelo" placeholder="Ex:cayenne" class="form-control" type="text">
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-4 control-label">Ano</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="Ano" placeholder="ex:2018" class="form-control" type="text">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label">Renavam</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="Renavam" placeholder="Renavam" class="form-control" type="password">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label">Placa</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="Placa" placeholder="Ex:AAA1111" class="form-control" type="password">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail do proprietário" class="form-control" type="text">
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label class="col-md-4 control-label">Proprietário.</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="proprietário" placeholder="proprietário do veículo" class="form-control" type="text">
                        </div>
                    </div>
                </div>




                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>


                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <button type="submit" class="btn btn-warning">Cadastrar <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div>
</body>

</html>
