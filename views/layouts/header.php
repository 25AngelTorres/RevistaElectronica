<?php 
  define('BASEURL','http://localhost:8080/PWeb/RevistaElectronica');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Revista Electronica</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
 <!-- Fancy box-->
	
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-buttons.css?v=1.0.5" />
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" />

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ITC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href=<?php echo '"'.BASEURL.'"'; ?>>
                            <span class="glyphicon glyphicon-home"></span> Inicio
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">servicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Revistas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Agraga Contenido</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Contactanos</a>
                    </li><!--
					<li>
                        <a class="page-scroll" href="#">Administrar revista</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#"> Ver Mensajes</a>
                    </li>-->
					<?php
                        if (!isset($_SESSION['user'])) {
                            echo '<li class="page-scroll">
                            <a href="'.BASEURL.'/views/site/login.php"><span class="glyphicon glyphicon-user"></span> Login</a>
                            </li>';
                        }
                        if (isset($_SESSION['user'])) {
                            echo '<li class="page-scroll">
                            <a href="'.BASEURL.'/views/site/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a>
                            </li>';
                        }
                    ?>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	
	   <div class="container theme-showcase" role="main">