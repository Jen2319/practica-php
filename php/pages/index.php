<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PHP - Fundamentos de  Programación</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

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
                            <h1 class="page-header">Fundamentos de Programación</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-14">
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-clock-o fa-fw"></i> Programación en php
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge"><i class="fa fa-check"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Introducción</h4>

                                                    <p>
                                                        <small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via
                                                            Twitter
                                                        </small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero
                                                        laboriosam
                                                        dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est
                                                        cum
                                                        veniam excepturi. Maiores praesentium, porro voluptas suscipit facere
                                                        rem
                                                        dicta, debitis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Caracteristicas</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem
                                                        quibusdam, tenetur commodi provident cumque magni voluptatem libero,
                                                        quis
                                                        rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia
                                                        repellendus.</p>

                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium
                                                        maiores
                                                        odit qui est tempora eos, nostrum provident explicabo dignissimos
                                                        debitis
                                                        vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Qué necesito</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                                                        numquam
                                                        facilis enim eaque, tenetur nam id qui vel velit similique nihil iure
                                                        molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Insertando php en html</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est
                                                        quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias
                                                        sapiente
                                                        rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut
                                                        debitis!</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Usando un servidor local</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus
                                                        modi
                                                        quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam
                                                        debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                                    <hr>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                                data-toggle="dropdown">
                                                            <i class="fa fa-gear"></i> <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Action</a>
                                                            </li>
                                                            <li><a href="#">Another action</a>
                                                            </li>
                                                            <li><a href="#">Something else here</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio
                                                        quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam.
                                                        Officia
                                                        quam qui adipisci quas consequuntur nostrum sequi. Consequuntur,
                                                        commodi.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt
                                                        obcaecati,
                                                        quaerat tempore officia voluptas debitis consectetur culpa amet,
                                                        accusamus
                                                        dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque
                                                        eaque.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-14 -->

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
