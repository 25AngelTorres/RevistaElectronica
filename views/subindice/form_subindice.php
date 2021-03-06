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
  if(isset($_POST['numero']))  {
     /*echo "<pre>";
      print_r($_POST);
    echo "</pre>";
    die();*/

    $SubindiceC->inserta_Subindice($_POST,$_GET['id_indice']);
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
                
                <?php $SubindiceC->header($_GET['id_indice']); ?>
      
<!--
                <div class="page-header">
                  <h1> <a href="../indice/form_indice.php"><span class="glyphicon glyphicon-th"></span></a> Sub&iacute;ndice <small>Insertar</small></h1>
                </div>
-->
              </div>
            </div>
<!-- Errores -->
          <?php
            $SubindiceC->errores();
          ?>
    		  <div class="row">
                    <form role="form" id="registerForm" method="POST">
<!-- id_indice -->


<!-- id_articulo -->
    				  <div class="col-md-12">
    					<div class="form-group">
                        	<label for="id_articulo" class="col-sm-6 control-label">Selecciona el art&iacute;culo que desea agregar a este sub&iacute;ndice: </label>
                        	<div class="col-sm-6">
                                                          <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                            	<?php echo $SubindiceC->getDropDown('id_articulo','nombre','articulo','id_articulo','id_articulo'); ?>
                        	</div>
                      	</div>
		              </div>

<!-- numero -->
					<div class="col-md-12">
    				  <div class="form-group">
                        <label for="numero" class="col-sm-6 control-label"> P&aacute;gina:</label>
                      	<div class="col-sm-6">
                        	<input type="text" class="form-control" id="numero"  name="numero" value="<?php echo $SubindiceC->get_numero(); ?>">
                    	</div>
                      </div>
    				</div>




          <div class="row">
            <div class=col-md-12>
              <div class="form-group">
                        <div class="col-sm-12">
                          <br />
                          <input type="submit" value="Guardar"  />
                        </div>
              </div>
            </div>
          </div>
                    </form>
          </div>
      
    		  <div class="row">
            <div class="col-md-12" id="tabla">
                    
                    <?php echo $SubindiceC->tableSQL(); ?>
                    
            </div>
          </div>
  </div> <!-- container -->
</section>


<?php include ('../layouts/footer.php'); ?>
