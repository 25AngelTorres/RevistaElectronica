<!-- formulario de indice -->
<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
include ('../layouts/url.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Indice.php');
  include ('../../controllers/IndiceController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');

//Inicializar el controlador
  $IndiceC = new IndiceController();
  if(isset($_POST['titulo']))  {

    if(isset($_GET['id_revista'])){
      $_POST['id_revista']=$_GET['id_revista'];
    }
    /*echo "<pre>";
      print_r($_POST);
    echo "</pre>";
    die();*/

    $IndiceC->inserta_Indice($_POST);
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
                  <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Indice <small>
                    <?PHP 
                      if(isset($_GET['id_revista'])){
                        $IndiceC->header1($_GET['id_revista']);
                      }
                      else{
                        echo "Insertar";
                      }
                    ?></small></h1>
                </div>
              </div>
            </div>
<!-- Errores -->
          <?php
            $IndiceC->errores();
          ?>
    		  <div class="row">
                    <form role="form" id="registerForm" method="POST">
<!-- Titulo -->
    				  <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombre">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $IndiceC->get_titulo(); ?>">
                      </div>
    				  </div>
<!-- Numero -->              
    				  <div class="col-md-6">
    				  <div class="form-group">
                        <label for="numero">N&uacute;mero</label>
                        <input type="text" class="form-control" id="numero"  name="numero" value="<?php echo $IndiceC->get_numero(); ?>">
                      </div>
    				  </div>
<!-- Revista -->
              <?php 
                if(!isset($_GET['id_revista'])){
              ?>
      				  <div class="col-md-12">
      					<div class="form-group">
                          <label for="id_revista" class="col-sm-3 control-label">Revista: </label>
                          <div class="col-sm-6">
                                                            <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                              <?php echo $IndiceC->getDropDown('id_revista','nombre','revista','id_revista','id_revista'); ?>
                          </div>
                        </div>
                </div>
              <?php
                }
              ?>

          <div class="row">
            <div class=col-md-12>
              <div class="form-group">
                        <div class="col-sm-12">
                          <input type="submit" value="Guardar"  />
                        </div>
              </div>
            </div>
          </div>
                    </form>
          </div>
      
    		  <div class="row">
            <div class="col-md-12" id="tabla">
                    <table class="table table-striped">
                    <?php 

                      $IndiceC->tableSQL();


                    ?>
                    </table>
            </div>
          </div>
  </div> <!-- container -->
</section>


<?php include ('../layouts/footer.php'); ?>
