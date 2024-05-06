<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PHP - Fundamentos de Programación en php</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <?php
            include("includes/nav.php");
            ?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">decision simple</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Determinar la nota definitiva de un estudiante
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" action="notadefinitiva2.php">
                                                <div class="form-group">
                                                    <label>Nombre Estudiante:</label>
                                                    <input name="textNombreEstudiante" class="form-control"
                                                    placeholder="ingrese el nombre del estudiante">
                                                </div>
                                                <div class="form-group">
                                                    <label>Asignatura:</label>
                                                    <input name="textAsignatura" class="form-control" placeholder="ingrese la asignatura">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nota primer periodo</label>
                                                    <input name="textNota1" class="form-control" placeholder="Digite la nota periodo uno">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nota segundo periodo</label>
                                                    <input name="textNota2" class="form-control" placeholder="Digite la nota periodo dos">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nota tercer periodo</label>
                                                    <input name="textNota3" class="form-control" placeholder="Digite la nota periodo tres">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nota cuarto periodo</label>
                                                    <input name="textNota4" class="form-control" placeholder="digite la nota periodo cuatro">
                                                </div>
                                                <button type="submit" class="btn btn-default">Enviar</button>
                                                <button type="reset" class="btn btn-default">Restablecer</button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Nota definitiva
                                </div>
                                <div class="panel-body">
                                    <p>Calcular la nota definitiva y determinar si ganó o perdio:<br><br>
                                </p>
                                </div>
                                <div class="panel-footer">
                                    Diseñe un algoritmo que calcule la nota definitiva y determine si gano o perdio imprimiendo toda la informacion.
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
