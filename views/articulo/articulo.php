<?php 
//VISTA PRIVADA
      include ('../../libs/security.php');
      include ('../layouts/url.php');
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
      include ('../../libs/Er.php');
	  include ('../layouts/header.php');
  
  $articuloC = new  ArticuloController();
  if(isset($_POST['nombre'])){
  
  $articuloC->insertaArticulo($_POST,$_FILES);

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

	<section  class="bg-light-gray">
  
     
    	<div class="row">
            <div class="col-md-12"><center>
              <div class="page-header">
                <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Articulos <small>Insertar</small></h1>
              </div>
            </center></div>
          </div>
		
<!-- Errores -->
		<div class="row">
            <div class="col-md-10 col-md-offset-1">
				<?PHP $articuloC->errores(); ?>
			</div>
		</div>

		<div class="row">
        	
            <div class="col-md-10 col-md-offset-1">
			
						    <form class="form-horizontal" method="POST"  id="registerForm" enctype="multipart/form-data">

<!-- Nombre -->
							  <div class="form-group" >
								<label class="col-lg-2 control-label" for="nombre">Nombre</label>
								<div class="col-lg-9">
								<input type="text" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre de la revista" value="<?php echo $articuloC->get_nombre(); ?>"/>
							   </div> </div>
							  
<!-- Resumen -->
							  <div class="form-group" >
								  <label class="col-lg-2 control-label" for="resumen">Resumen</label>
								  <div class="col-lg-9">
								  <textarea  class="form-control" id='resumen' name = "resumen" style="  background-color:rgba(255,255,255,1);" >
								  	<?php echo $articuloC->get_resumen(); ?>
								  </textarea>	
                                </div>	  </div>	
													
<!-- Abstracion -->								
								<div class="form-group" >
								  <label class="col-lg-2 control-label"for="abstrac">Abstracci&oacute;n</label>
								  <div class="col-lg-9">
								  <textarea id='abstrac' name = "abstrac" style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_abstrac(); ?>
								  </textarea>	
                                </div>	 
								</div>
								
<!-- Introduccion -->		
								<div class="form-group" >
								  <label class="col-lg-2 control-label" for="introduccion">Introducci&oacute;n</label>
								  <div class="col-lg-9">
								  <textarea id='introduccion' name = "introduccion" style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_introduccion(); ?>
								  </textarea>	
                                </div>	
								</div>

								
<!-- Metodologia -->
								<div class="form-group" >
								  <label class="col-lg-2 control-label" for="metodologia">Metodologia</label>
								  <div class="col-lg-9">
								  <textarea id='metodologia' cols="1000000" name="metodologia"style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_metodologia(); ?>
								  </textarea>	
                                </div>	
								</div>

<!-- Contenido -->			
								<div class="form-group" >
								 <label class="col-lg-2 control-label" for="contenido">Contenido</label>
								 <div class="col-lg-9">
								  <textarea id='contenido' name = "contenido"style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_contenido(); ?>
								  </textarea>
								  
                                </div>
								</div>
								
							  
<!-- Fecha -->
								
							  <div class="form-group">
							      <label class="col-lg-2 control-label" for="fecha_creacion">Fecha de creaci&oacute;n</label>
								  <div class="col-lg-9">
                                      <input type="text" class="form-control" id="dp1" name="fecha_creacion" value="<?php echo $articuloC->get_fecha_creacion(); ?>" />

							  </div>
							  </div>

<!-- Archivo -->			  
							  <div class="form-group">
								<label class="col-lg-2 control-label" for="archiv_pdf">archivo pdf</label>
								<div class="col-lg-9">
								<input type="file" id="archivo_pdf" name = "archivo_pdf"/>
								<p class="help-block">Carga un archivo pdf</p>
							  </div>
							  </div>

<!-- Status -->		
							  <div class="form-group">
							    <label class="col-lg-2 control-label"for="id_status">Status</label>
								<div class="col-lg-9">
								 <?php echo $articuloC->getDropDown('id_status','status','status','id_status','id_status'); ?>
							  </div>
							  </div>
							  
<!-- Conclusiones -->		  
							  <div class="form-group" >
								  <label class="col-lg-2 control-label" for="conclusiones">Conclusiones</label>
								  <div class="col-lg-9">
								  <textarea id='conclusiones' name = "conclusiones" style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_conclusiones(); ?>
								  </textarea>	
                                </div>	
								</div>

<!-- Agradecimientos -->
							  <div class="form-group" >
								<label class="col-lg-2 control-label" for="agradecimientos">Agradecimientos</label>
								<div class="col-lg-9">
								<input type="text" class="form-control" id="agradecimientos" name = "agradecimientos" placeholder="Ingresa agradecimiento" value="<?php echo $articuloC->get_agradecimientos(); ?>"/>
							  </div>
							  </div>

<!-- Referencia -->
							  <div class="form-group" >
								<label class="col-lg-2 control-label" for="referencias">Referencias</label>
								<div class="col-lg-9">
								<input type="text" class="form-control" id="referencias" name = "referencias" placeholder="Ingresa referencia" value="<?php echo $articuloC->get_referencias(); ?>" />
							  </div>
							  </div>
							  


							  
		  
							  <div>
							  <center><button type="submit" class="btn btn-default">Guardar</button><center>
							  
							   
							  </div>							  
							  
							</form>
							
				
        	</div>
		
			<?php echo $articuloC->show_grid(); ?>
        </div>
</section>
        
	<?php include ('../layouts/footer.php'); ?>