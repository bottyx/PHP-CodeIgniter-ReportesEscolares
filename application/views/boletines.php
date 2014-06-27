<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Reporte de abusos</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url()?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
                <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url()?>assets/js/jq.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url()?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url()?>assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url()?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url()?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>     

        <script>
        $( document ).ready(function() {
		  	// Handler for .ready() called.
		  	function callAjax(){
		  		console.log('si entra al ajax');
        		//$('#tableAbusos').append('Hola mundo');
			}
			    setInterval(callAjax, 5000 );
		});
        </script>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Reporte de abusos
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                
                                <span>Administrador <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url()?>assets/img/icon.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Oswaldo Goomez - Web Developer
                                        <small>Domingo 22 de junio del 2014</small>
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url()?>">
                                <i class="fa fa-dashboard"></i> <span>Principal</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url()?>boletines">
                                <i class="fa fa-dashboard"></i> <span>Crear Boletin</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Escuela Secundaria Gral #2
                        <small>Panel de control</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        Usuarios Registrados
                                    </p>
                                </div>
                                <div class="icon">
                                    <img width="50" src="<?php echo base_url()?>assets/img/users.png">
                                </div>
                                <a href="#" class="small-box-footer">
                                    Mas info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        1230
                                    </h3>
                                    <p>
                                        Quejas
                                    </p>
                                </div>
                                <div class="icon">
                                    <img width="70" src="<?php echo base_url()?>assets/img/quejas.png">
                                </div>
                                <a href="#" class="small-box-footer">
                                   Mas info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        Sistema de Reportes
                                    </p>
                                </div>
                                <div class="icon">
                                    <img width="70" src="<?php echo base_url()?>assets/img/reportes.png">
                                </div>
                                <a href="#" class="small-box-footer">
                                    Mas info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Mensajes sin leer
                                    </p>
                                </div>
                                <div class="icon">
                                    <img width="50" src="<?php echo base_url()?>assets/img/msg.png">
                                </div>
                                <a href="#" class="small-box-footer">
                                    Mas info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->



                        <div class="container">

                        	<h2>Lista de ultimos abusos y acosos</h2><hr>

                        	<table class="table table-hover" id="tableAbusos">
						      <thead>
						        <tr>
						          <th>ID</th>
						          <th>Asunto</th>
						          <th>Descripcion corta</th>
						          <th>Hora de reporte</th>
						          <th>Detalle</th>
						          <th>Visto</th>
						        </tr>
						      </thead>
						      <tbody>
						        <tr>
						          <td>1</td>
						          <td>Acoso de alumno</td>
						          <td>alumno molesta a los niño...</td>
						          <td>12:23 am Junio 25 del 2014</td>
						          <td><button type="button" class="btn btn-success btn-xs">ver</button></td>
						          <td><img width="20" src="<?php echo base_url()?>assets/img/eye.png"/></td>
						        </tr>
						        <tr>
						          <td>2</td>
						          <td>Acoso de maestro</td>
						          <td>maestro nos pone en ridiculo...</td>
						          <td>12:23 am Junio 17 del 2014</td>
						          <td><button type="button" class="btn btn-success btn-xs">ver</button></td>
						          <td></td>
						        </tr>
						        <tr>
						          <td>3</td>
						          <td>Golpes</td>
						          <td>niño nos golpea cada que pasamos por...</td>
						          <td>12:23 am Mayo 28 del 2014</td>
						          <td><button type="button" class="btn btn-success btn-xs">ver</button></td>
						          <td><img width="20" src="<?php echo base_url()?>assets/img/eye.png"/></td>

						        </tr>
						        <tr>
						          <td>4</td>
						          <td>Acoso de alumno</td>
						          <td>alumno molesta a los niño...</td>
						          <td>12:23 am Junio 25 del 2014</td>
						          <td><button type="button" class="btn btn-success btn-xs">ver</button></td>
						          <td><img width="20" src="<?php echo base_url()?>assets/img/eye.png"/></td>
						        </tr>
						        <tr>
						          <td>5</td>
						          <td>Acoso de maestro</td>
						          <td>maestro nos pone en ridiculo...</td>
						          <td>12:23 am Junio 17 del 2014</td>
						          <td><button type="button" class="btn btn-success btn-xs">ver</button></td>
						          <td><img width="20" src="<?php echo base_url()?>assets/img/eye.png"/></td>
						        </tr>
						        <tr>
						          <td>6</td>
						          <td>Golpes</td>
						          <td>niño nos golpea cada que pasamos por...</td>
						          <td>12:23 am Mayo 28 del 2014</td>
						          <td><button type="button" class="btn btn-success btn-xs">ver</button></td>
						          <td></td>
						        </tr>
						        
						      </tbody>
						    </table>
                        </div>



                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

      	



    </body>
</html>