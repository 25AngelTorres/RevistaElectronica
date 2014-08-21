<!-- Formulario de Revista-->
<?php 
//VISTA PRIVADA

  include ('../../libs/security.php');
  include ('../layouts/url.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Contenido_extra.php');
  include ('../../controllers/Contenido_extraController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');    
  
  
//Inicializar el controlador
$ContenidoE = new Contenido_extraController();
  if(isset($_POST['nombre']))  {
    /*echo "<pre>";
      print_r($_POST);
      print_r($_FILES);
    echo "</pre>";
    //die();*/
    $ContenidoE->insertaContenido_extra($_POST, $_FILES);
  }

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
            <div class="col-md-12">
              <div class="page-header">
                <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Insertar <small>Contenido extra</small></h1>
              </div>
            </div>
          </div>
<!-- Errores o exito -->
          <?php
            $ContenidoE->errores();
          ?>
<!-- formulario -->
            <form class="form-horizontal" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                
<!-- Nombre -->
                  <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $ContenidoE->get_nombre(); ?>" />
                    </div>
                  </div>

<!--contenido -->             
            <div class="form-group" >
              <label for="contenido" class="col-sm-3 control-label">Contenido</label>
              <div class='col-sm-6'>
                  <textarea id='contenido' name = "contenido" style="  background-color:rgba(255,255,255,1);">
                      <?php echo $ContenidoE->get_contenido(); ?>
                  </textarea> 
              </div>  
            </div>

<!-- Archivo -->        
                <div class="form-group">
                  <label for="archivo_pdf" class="col-sm-3 control-label">Archivo pdf</label>
                  <div class="col-sm-6">
                    <input type="file" id="archivo_pdf" name = "archivo_pdf"/>
                  </div>
                </div>

<!-- Tipo contenido -->
          <div class="form-group">
                    <label for="id_tipo_contenido" class="col-sm-3 control-label">Tipo de contenido: </label>
                    <div class="col-sm-6">
                                                      <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                        <?php echo $ContenidoE->getDropDown('id_tipo_contenido','tipo','tipo_contenido','id_tipo_contenido','id_tipo_contenido'); ?>
                    </div>
                  </div>


                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="col-sm-12">
                      
                <button type="submit" class="btn btn-default">Guardar</button>
              
            
                    </div>
                  </div>
                
                <?php echo $ContenidoE->show_grid(); ?>
                
                </div>
              </div>
            </form>
          <!-------->

    </div><!-- Container -->
  </div><!-- intro-body -->
</section>


<?php include ('../layouts/footer.php'); ?>