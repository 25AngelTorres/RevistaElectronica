<?php 
    include ('../../libs/security.php');
    include ('../layouts/url.php');
    include ('../layouts/header.php');
  
?>

<!--<body id="page-top" class="index">-->

    <!-- Header -->
    <header id="headerP">
        <div class="container">
            <div class="intro-text">                
            </div>
        </div>
    </header>

<section id="bd" class="bg-light-gray">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="page-header">
                            <h1>Administrar Base de datos <small>Insertar</small></h1>
                        </div>

                        <p class="intro-text">Para insertar dentro de la base de datos, elige la tabla a la cual quieres agregar nueva informaci&oacute;n.</p>


                        <!--<div class="page-scroll"  id="btn_opc_inser_bd">
                            <a class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                          
                            </a>
                        </div>-->

                    </div>
                </div>
                <br />
                    <div class="row" id="opc_inser_bd">
                            <div class="col-md-6">
                                <div class="list-group">
                                    <a href="../revista/form_revista.php" class="list-group-item">Revista</a>
                                    <a href="../autor/autor.php" class="list-group-item">Autor</a>
                                    <a href="../contenido_extra/form_contenido_extra.php" class="list-group-item">Contenido extra</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-group">
                                    <a href="../articulo/articulo.php" class="list-group-item">Art&iacute;culo</a>
                                    <a href="../indice/form_indice.php" class="list-group-item">&Iacute;ndice</a>
                                </div>
                            </div>
                    </div>
            </div> <!-- container -->
    </section>



<?php include ('../layouts/footer.php'); ?>