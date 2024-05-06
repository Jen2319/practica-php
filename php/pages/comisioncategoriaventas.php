<?php
/*
Titulo: Programa que calcula el salario de un empleado
Autor: Especialidad de sistemas CASD 
Fecha: Febrero de 2024
Licencia: GNU GPL v3
*/
include("libreria.php");


function calcular_comision($ventas, $porcentajeComision){
    $comision= $ventas * $porcentajeComision/100;
    return $comision;
}

///Entrada
$nombre=ingresar_dato ("textNombre");
$categoria=ingresar_dato ("textCategoria");
$ventas=ingresar_dato ("textVentas");

///Proceso
   
function determinar_porcentaje_comision($categoria, $ventas){
    if ($categoria==1){

        if ($ventas>=2000000 and $ventas<=5000000){
             $porcentajeComision=3;
          }
        else{
            if ($ventas>5000000){
                $porcentajeComision=5;
               }
            else{
                $porcentajeComision=0;
             }
          }
   }
  else{
    if ($categoria==2){
           if ($ventas<1000000){
                  $porcentajeComision=0;
            }
        else{ 
            if ($ventas>=1000000 and $ventas<=2000000){
                      $porcentajeComision=2;
              }
            else{
                if($ventas>2000000 and $ventas<=3000000){
                          $porcentajeComision=4;
                  }
                else{
                    if($ventas>3000000){
                              $porcentajeComision=6;
                     }
                 }
             }
         }
     }
  
                    else{
                        if ($categoria==3){
                              if ($ventas<1000000){
                                   $porcentajeComision=0;
                               }
                                  else{
                                     $porcentajeComision=0;
                                   }
                         }
                     }
  }
                           
    return $porcentajeComision;
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
                                  calcular  Comisión de un empleado
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
      <td>Nombre del empleado:</td>
      <td><?php mostrar_mensaje($nombre);?></td>
    </tr>
    <tr>
      <td >Categoria:</td>
      <td><?php mostrar_mensaje($categoria);?></td>
    </tr>
    <tr>
      <td >Valor de ventas:</td>
      <td><?php mostrar_mensaje($ventas);?></td>
    </tr>
    <tr>
      <td >Porcentaje de comisión:</td>
      <td><?php mostrar_mensaje($porcentajeComision);?>%</td>
    </tr>
    <tr>
      <td>Comisión:</td>
      <td><?php mostrar_mensaje($comision);?></td>
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
