<!-- formulario de subindice -->
<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
include ('../layouts/url.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Subindice.php');
  include ('../../controllers/SubindiceController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

//Inicializar el controlador
  $SubindiceC = new SubindiceController();
  if(isset($_POST['id_indice']))  {
     /*echo "<pre>";
      print_r($_POST);
    echo "</pre>";
    die();*/

    $SubindiceC->inserta_Subindice($_POST);
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
                  <h1> <a href="../indice/form_indice.php"><span class="glyphicon glyphicon-th"></span></a> Sub&iacute;ndice <small>Insertar</small></h1>
                </div>
              </div>
            </div>
<!-- Errores -->
          <?php
            $SubindiceC->errores();
          ?>
    		  <div class="row">
                    <form role="form" id="registerForm" method="POST">
<!-- id_indice -->
    				  <div class="col-md-12">
    					<div class="form-group">
                        	<label for="id_indice" class="col-sm-8 control-label">Selecciona el indice al cual pertenece: </label>
                        	<div class="col-sm-4">
                                                          <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                            	<?php echo $SubindiceC->getDropDown('id_indice','titulo','indice','id_indice','id_indice'); ?>
                        	</div>
                      	</div>
		              </div>

<!-- id_articulo -->
    				  <div class="col-md-12">
    					<div class="form-group">
                        	<label for="id_articulo" class="col-sm-8 control-label">Selecciona el artículo que desea agregar a este subindice: </label>
                        	<div class="col-sm-4">
                                                          <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                            	<?php echo $SubindiceC->getDropDown('id_articulo','nombre','articulo','id_articulo','id_articulo'); ?>
                        	</div>
                      	</div>
		              </div>

<!-- numero -->
					<div class="col-md-12">
    				  <div class="form-group">
                        <label for="numero" class="col-sm-8 control-label"> N&uacute;mero:</label>
                      	<div class="col-sm-4">
                        	<input type="text" class="form-control" id="numero"  name="numero" value="<?php echo $SubindiceC->get_numero(); ?>">
                    	</div>
                      </div>
    				</div>




          <div class="row">
            <div class=col-md-12>
              <div class="form-group">
                        <div class="col-sm-12">
                          <input type="submit" value="Enviar"  />
                        </div>
              </div>
            </div>
          </div>
                    </form>
          </div>
      
    		  <div class="row">
            <div class="col-md-12">
                    
                    <?php echo $SubindiceC->show_grid(); ?>
                    
            </div>
          </div>
  </div> <!-- container -->
</section>


<?php include ('../layouts/footer.php'); ?>
