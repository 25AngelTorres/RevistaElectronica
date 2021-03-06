<!-- Formulario de Revista-->
<?php 
//VISTA PRIVADA

  include ('../../libs/security.php');
  include ('../layouts/url.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');    
  
  
//Inicializar el controlador
$RevistaC = new RevistaController();
  if(isset($_POST['nombre']))  {
    /*echo "<pre>";
      print_r($_POST);
      print_r($_FILES);
    echo "</pre>";
    //die();*/

    
    $RevistaC->inserta_revista($_POST, $_FILES);


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
                <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Revista <small>Insertar</small></h1>
              </div>
            </div>
          </div>
<!-- Errores o exito -->
          <?php
            $RevistaC->errores();
          ?>
<!-- formulario -->
            <form class="form-horizontal" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                
<!-- Nombre -->
                  <div class="form-group">
                    <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-6">
                     <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa nombre de la revista" value="<?php echo $RevistaC->get_nombre(); ?>" />
                    </div>
                  </div>
<!--portada-->
                  <div class="form-group">
							<label for="portada" class="col-sm-3 control-label">Portada</label>
                    <div class="col-sm-6">        
                        <input type="file" id="portada" name="portada" />
                    </div>    
                  </div>
<!-- Fecha -->
                  <div class="form-group">
                    <label for="fecha" class="col-sm-3 control-label">Fecha</label>
                    <div class ='col-sm-6'>
                      <input type="text" class="form-control" id="dp1" name="fecha" value="<?php echo $RevistaC->get_fecha(); ?>" />
                    </div>
                  </div>
<!-- 
                  <div class="form-group">
                    <label for="datetimepicker6" class="col-sm-3 control-label">Fecha: </label>
                  <!-- Ejemplo 6 de Boostrap datetimepicker --
                    <div class='col-sm-6'>
                      <input type='text' class="form-control" id='datetimepicker6' name="fecha" value="<?php echo $RevistaC->get_fecha(); ?>" />
                    </div> 
                  </div>-->
<!-- Volumen -->
                      <div class="form-group">
                      	<label for="volumen" class="col-sm-3 control-label">Volumen de la revista</label>
                          <div class='col-sm-6'>
                        <input type="text" class="form-control" id="volumen" name="volumen" placeholder="Ingresa volumen de la revista" value="<?php echo $RevistaC->get_volumen(); ?>" />
                        </div>
                      </div>
<!-- Titulo -->
						<div class="form-group">
                        <label for="titulo" class="col-sm-3 control-label">T&iacute;tulo de la revista</label>
                        <div class='col-sm-6'>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa t&iacute;tulo de la revista" value="<?php echo $RevistaC->get_titulo(); ?>" />
                        </div>
                         </div>
<!-- Subtitulo -->
				<div class="form-group">
                        <label for="subtitulo" class="col-sm-3 control-label">Subt&iacute;tulo de la revista</label>
                  <div class='col-sm-6'>
                        <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Ingresa subt&iacute;tulo de la revista" value=" <?php echo $RevistaC->get_subtitulo(); ?>" />
                   </div>
              </div>

<!-- Numero -->
				<div class="form-group">
                        <label for="numero" class="col-sm-3 control-label">N&uacute;mero de la revista</label>
                     <div class='col-sm-6'>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Ingresa n&uacute;mero de la revista" value="<?php echo $RevistaC->get_numero(); ?>" />
                     </div>
               </div>
<!-- Clave -->
         				<div class="form-group">
                        <label for="clave" class="col-sm-3 control-label" >Clave</label>
                      <div class='col-sm-6'>
                        <input type="text" class="form-control" id="clave" name="clave" placeholder="Ingresa clave de la revista" value="<?php echo $RevistaC->get_clave(); ?>" />
                       </div>
                      </div>
<!-- Directorio -->
						<div class="form-group" >
								 <label for="directorio" class="col-sm-3 control-label" >Directorio de la revista</label>
								   <div class='col-sm-6'>
								  <textarea id='directorio' name="directorio" style="background-color:rgba(255,255,255,1);">  
                      <?php echo $RevistaC->get_directorio(); ?>
                  </textarea>
                                
                  </div>	
						</div>
<!--Editorial -->
						<div class="form-group" >
						  <label for="editorial" class="col-sm-3 control-label">Editorial de la revista</label>
							<div class='col-sm-6'>
							  <textarea id='editorial' name = "editorial" style="  background-color:rgba(255,255,255,1);">
                  <?php echo $RevistaC->get_editorial(); ?>
                </textarea>	
              </div>	
						</div>
<!-- Status -->
 					<div class="form-group">
                    <label for="id_status" class="col-sm-3 control-label">Estatus: </label>
                    <div class="col-sm-6">
                                                      <!-- $id_tabla,$nombre_columna,$tabla,$name,$id,$where = ' ' -->
                        <?php echo $RevistaC->getDropDown('id_status','status','status','id_status','id_status'); ?>
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
                </div>
              </div>
            </form>
          <!-------->
        <div class ="row">
          <div class="col-md-12">
            <div class="page-header">
              <h1 class="text-center"> <a href="#"><span class="glyphicon glyphicon-th"></span></a>Lista de Revistas <small></small></h1>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1"  id="tabla">
              <table class="table">
                <tr>
                  <th>
                    Id Revista
                  </th>
                  <th>
                    Nombre
                  </th>
                  <th>
                    Mas
                  </th>
                  <th>
                    Indice
                  </th>
                </tr>

                    <?php 
                      $RevistaC->tableSQL();
                    ?>
              </table>
            </div>
          </div>


    </div><!-- Container -->
  </div><!-- intro-body -->
</section>


<?php include ('../layouts/footer.php'); ?>