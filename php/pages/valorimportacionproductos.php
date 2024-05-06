<?php
/*
Titulo: Programa que calcula el salario de un empleado
Autor: Especialidad de sistemas CASD 
Fecha: Febrero de 2024
Licencia: GNU GPL v3
*/
include("libreria.php");

function calcular_valor_porcentaje ($porcentajeImpuesto ){
    $valorPorcentaje = ($porcentajeImpuesto)/100;
    return $valorPorcentaje;
}

function calcular_valor_impuesto ($valorProducto, $valorPorcentaje ){
  $valorImpuesto = $valorProducto * $valorPorcentaje;
  return $valorImpuesto;
}
function calcular_valor_producto_con_impuesto ($valorProducto, $valorImpuesto ){
  $valorProductoConImpuesto = $valorProducto + $valorImpuesto;
  return $valorProductoConImpuesto;
}
///Entrada
$nombre=ingresar_dato ("textNombre");
$valorProducto=ingresar_dato ("textValorProducto");

///Proceso
$porcentajeImpuesto=calcular_porcentaje_impuesto ($valorProducto);
$mensaje ="";

if($valorProducto<=60000){
  $porcentajeImpuesto=8;
}

else {
   $porcentajeImpuesto=11;
}
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
                                  calcular valor de importacion de un producto
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
      <td>Nombre del Cliente:</td>
      <td><?php mostrar_mensaje($nombre);?></td>
    </tr>
    <tr>
      <td >Valor del Producto:</td>
      <td><?php mostrar_mensaje($valorProducto);?></td>
    </tr>
    <tr>
      <td >porcentaje de Impuesto:</td>
      <td><?php mostrar_mensaje($porcentajeImpuesto);?>%</td>
    </tr>
    <tr>
      <td >valor del del impuesto:</td>
      <td><?php mostrar_mensaje($valorImpuesto);?></td>
    </tr>
    <tr>
      <td>Valor Total con impuesto:</td>
      <td><?php mostrar_mensaje($valorProductoConImpuesto);?></td>
    </tr>
    
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <div class="panel-body">
                                       <div class= "alert alert-<?php if ($definitiva>=3){mostrar_mensaje("success"); }else{ mostrar_mensaje("danger");}?>">
                                       <?php mostrar_mensaje ($mensaje);?>
                                      </div>                                    
                                    </div>
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
