<?php
/*
Titulo: Programa que determine un descuento de acuerdo al monto de la compra
Autor: Especialidad de sistemas CASD 
Fecha: Febrero de 2024
Licencia: GNU GPL v3
*/

function determinar_descuento($monto){
    if ($monto<50000){
        $porcentajeDescuento=0;
        }
    else{
        if ($monto>=50000 and $monto<70000){
            $porcentajeDescuento=11;
            }
        else{
            if ($monto>=70000 and $monto<150000){
                $porcentajeDescuento=18;
                }
            else{
                $porcentajeDescuento=25;
                }
           }   
       } 
    return $porcentajeDescuento;
}

function calcular_descuento($monto, $porcentajeDescuento){
    $valorDescuento = $monto*$porcentajeDescuento/100;
    return $valorDescuento;
}

function calcular_valor_Pagar($monto, $valorDescuento){
    $valorPagar = $monto-$valorDescuento;
    return $valorPagar;
}

include("libreria.php");

///Entrada

$nombreCliente=ingresar_dato ("textNombreCliente");
$monto=ingresar_dato ("textMonto");

///Proceso
$porcentajeDescuento= determinar_descuento($monto);
$valorDescuento= calcular_descuento($monto, $porcentajeDescuento);
$valorPagar= calcular_valor_pagar($monto, $valorDescuento);


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
                            <h1 class="page-header">Decisión Simple</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                Descuento Monto
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
      <td width="50%">Nombre del Cliente:</td>
      <td><?php mostrar_mensaje($nombreCliente);?></td>
    </tr>
    <tr>
      <td width="50%">Valor Monto:</td>
      <td><?php mostrar_mensaje($monto);?></td>
    </tr>
    <tr>
      <td width="50%">Porcentaje descuento:</td>
      <td><?php mostrar_mensaje($porcentajeDescuento);?>%</td>
    </tr>
    <tr>
      <td width="50%">Valor descuento:</td>
      <td><?php mostrar_mensaje($valorDescuento);?></td>
    </tr>
    <tr>
      <td width="50%">Valor a pagar:</td>
      <td><?php mostrar_mensaje($valorPagar);?></td>
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
