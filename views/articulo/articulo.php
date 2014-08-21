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

            <div class="col-md-12">
	              <div class="page-header">
	                <h1 class="text-center"> <a href="#"><span class="glyphicon glyphicon-th"></span></a> Crear Articulo <small></small></h1>
	              </div>
            </div>
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
								<input type="text" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre del articulo" value="<?php echo $articuloC->get_nombre(); ?>"/>
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
								  <label class="col-lg-2 control-label"for="abstrac">Abstract</label>
								  <div class="col-lg-9">
								  <textarea id='abstrac' name = "abstrac" style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_abstrac(); ?>
								  </textarea>	
                                </div>	 
								</div>
								
<!-- Introduccion -->		
								<div class="form-group" >
								  <label class="col-lg-2 control-label" for="introduccion">Introducción</label>
								  <div class="col-lg-9">
								  <textarea id='introduccion' name = "introduccion" style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_introduccion(); ?>
								  </textarea>	
                                </div>	
								</div>

								
<!-- Metodologia -->
								<div class="form-group" >

								  <label class="col-lg-2 control-label" for="metodologia">Materiales y metodos</label>

								  <div class="col-lg-9">
								  <textarea id='metodologia' cols="1000000" name="metodologia"style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_metodologia(); ?>
								  </textarea>	
                                </div>	
								</div>

<!-- Contenido -->			
								<div class="form-group" >
								 <label class="col-lg-2 control-label" for="contenido">Resultados y discución</label>
								 <div class="col-lg-9">
								  <textarea id='contenido' name = "contenido"style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_contenido(); ?>
								  </textarea>
								  
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
								
								<textarea id='agradecimientos' name="agradecimientos" style="  background-color:rgba(255,255,255,1);">
								  	<?php echo $articuloC->get_agradecimientos(); ?>
								</textarea>	
							  </div>
							  </div>

<!-- Referencia -->
							  <div class="form-group" >
								<label class="col-lg-2 control-label" for="referencias">Referencias</label>
								<div class="col-lg-9">
								
									<textarea id='referencias' name="referencias" style="  background-color:rgba(255,255,255,1);">
									  	<?php echo $articuloC->get_referencias(); ?>
									</textarea>	
							  </div>
							  </div>
							  
<!-- Fecha -->
								
							  <div class="form-group">
							      <label class="col-lg-2 control-label" for="fecha_creacion">Fecha de creación</label>
								  <div class="col-lg-9">
                                      <input type="text" class="form-control" id="dp1" name="fecha_creacion" value="<?php echo $articuloC->get_fecha_creacion(); ?>" />

							  	</div>
							  </div>
<!-- Status -->		
							  <div class="form-group">
							    <label class="col-lg-2 control-label"for="id_status">Status</label>
								<div class="col-lg-9">
								 <?php echo $articuloC->getDropDown('id_status','status','status','id_status','id_status'); ?>
							  </div>
							  </div>

<!-- Archivo -->			  
							  <div class="form-group">
								<label class="col-lg-2 control-label" for="archiv_pdf">archivo pdf</label>
								<div class="col-lg-9">
								<input type="file" id="archivo_pdf" name = "archivo_pdf"/>
									<p class="help-block">Carga un archivo pdf del articulo</p>
								  </div>
							  </div>			  
		  
							  <div>
							  <center><button type="submit" class="btn btn-default">Guardar</button><center>
							  
							   
							  </div>							  
							  
							</form>
							
				
        	</div>
		
			
        </div>




		<div class="row">
            <div class="col-md-12">
	              <div class="page-header">
	                <h1 class="text-center"> <a href="#"><span class="glyphicon glyphicon-th"></span></a>Lista de Articulos <small></small></h1>
	              </div>
            </div>
      	</div>




		
		<div class="row">
            <div class="col-md-10 col-md-offset-1"  id="tabla">
			         
                    <table class="table table-striped">
                    	<tr>
                    		<th>Nombre del articulo</th>
                    		<th>Opciones</th>
                    		<th>Opciones</th>
                    	</tr>
                    <?php 

	                    $data = $articuloC->consulta_sql($articuloC->sql_articulos)->getArray(); 
						$data2 = $articuloC->consulta_sql($articuloC->sql_autor)->getArray(); 
	                      
	                    /*print_r($data);
	                    die();*/
	                    foreach ($data as $value) {
	                        echo "<tr>";
	                         	echo "<td>".$value['nombre']."</td>";
	                          	
							
	                          	echo "<td>
		                          		<a class='btn btn-primary'
			                          		href='verArticulo.php?id_articulo=".$value['id_articulo']."'>
			                          		Ver articulo
		                          		</a>
                          		</td>";

	                          	echo "<td>
		                          		<a class='btn btn-primary'
			                          		href='editarArticulo.php?id_articulo=".$value['id_articulo']."'>
			                          		Editar articulo
		                          		</a>
                          		</td>";	

							echo "</tr>";
	                    }



                    ?>
                    </table>
            </div>
          </div>
</section>
        
	<?php include ('../layouts/footer.php'); ?>