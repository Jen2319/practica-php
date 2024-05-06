<?php
/*
Titulo: Programa que calcula el salario de un empleado
Autor: Especialidad de sistemas CASD 
Fecha: Febrero de 2024
Licencia: GNU GPL v3
*/

function ingresar_dato ($variable){
    $dato= $_POST [$variable];
    return $dato;
}

function mostrar_mensaje ($mensaje){
    echo $mensaje;
}

function generar_mensaje ($mensaje, $valor){
    $texto= $mensaje." ".$valor;
    return $texto;
}

function calcular_valor_horas_extras ($numeroHorasExtras, $valorHoraExtra){
    $valorHorasExtras = $numeroHorasExtras * $valorHoraExtra;
    return $valorHorasExtras;
}

function calcular_descuento_salud ($sueldoBase, $porcentaje){
    $descuentoSalud= $sueldoBase * $porcentaje / 100;
    return $descuentoSalud;
}

function calcular_descuento_pension ($sueldoBase, $porcentaje){
    $descuentoPension = $sueldoBase * $porcentaje / 100;
    return $descuentoPension;
}

function calcular_neto_pagar ($sueldoBase, $valorHorasExtras, $descuentoSalud, $descuentoPension ){
    $netoPagar = $sueldoBase + $valorHorasExtras - $descuentoSalud - $descuentoPension ;
    return $netoPagar;
}

///Entrada
$documento=ingresar_dato ("textDocumento");
$nombre=ingresar_dato ("textNombre");
$sueldoBase=ingresar_dato ("textSueldoBase");
$numeroHorasExtras=ingresar_dato ("textNumeroHorasExtras");

///Proceso
$valorHoraExtra=3500;
$valorHorasExtras= calcular_valor_horas_extras ($numeroHorasExtras, $valorHoraExtra);
$descuentoSalud= calcular_descuento_salud ($sueldoBase, 8);
$descuentoPension= calcular_descuento_pension ($sueldoBase, 4);
$netoPagar= calcular_neto_pagar ($sueldoBase, $valorHorasExtras, $descuentoSalud, $descuentoPension );

///Salida

?>
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
                            <h1 class="page-header">Secuenciales</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  Salario de un empleado
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Dato</th>
                                                    <th>Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    <tr>
      <td width="50%">Documento del empleado:</td>
      <td><?php mostrar_mensaje($documento);?></td>
    </tr>
    <tr>
      <td width="50%">Nombre del Empleado:</td>
      <td><?php mostrar_mensaje($nombre);?></td>
    </tr>
    <tr>
      <td width="50%">Sueldo Base:</td>
      <td><?php mostrar_mensaje($sueldoBase);?></td>
    </tr>
    <tr>
      <td width="50%">Número de horas extras:</td>
      <td><?php mostrar_mensaje($numeroHorasExtras);?></td>
    </tr>
    <tr>
      <td width="50%">Valor hora extra:</td>
      <td><?php mostrar_mensaje($valorHoraExtra);?></td>
    </tr>
    <tr>
      <td width="50%">Valor a pagar por horas extras:</td>
      <td><?php mostrar_mensaje($valorHorasExtras);?></td>
    </tr>
    <tr>
      <td width="50%">Descuento de Salud:</td>
      <td><?php mostrar_mensaje($descuentoSalud);?></td>
    </tr>
    <tr>
      <td width="50%">Descuento de Pensión:</td>
      <td><?php mostrar_mensaje($descuentoPension);?></td>
    </tr>
    <tr>
      <td width="50%">Neto a Pagar:</td>
      <td><?php mostrar_mensaje($netoPagar);?></td>
    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
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
