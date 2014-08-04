
  <?php 
  session_start();
  
  
  
 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
      include ('../../libs/Er.php');
	  include ('../articulo/header.php');
    $articuloC = new  ArticuloController();
  if(isset($_POST['nombre'])){
  
  
  $articuloC->insertaArticulo($_POST,$_FILES);
    $articuloC->error();
  
  
  
  
  }
 
?>
  
  
  
  
     
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Articulos  </h1> </center>
    	</div>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="registro" method="POST" enctype="multipart/form-data">
							  <div class="form-group" >
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre de la revista" />
							  </div>
							  
							  
							   
				
							  <div class="form-group" >
								<label for="resumen">Resumen</label>
								<input type="text" class="form-control" id="resumen" name = "resumen" placeholder="resumen de revista" />
							  </div>
							  
							  <div class="form-group" >
								<label for="abstrac">Abstracci&oacute;n</label>
								<input type="text" class="form-control" id="abstrac" name = "abstrac" placeholder="abstract de revista" />
							  </div>
							  <div class="form-group" >
								<label for="introduccion">Introducci&oacute;n</label>
								<input type="text" class="form-control" id="introduccion" name = "introduccion" placeholder="introduccion de revista" />
							  </div>
							  
							  <div class="form-group" >
								<label for="metodologia">Metodologia</label>
								<input type="text" class="form-control" id="metodologia" name = "metodologia" placeholder="metodologia de revista"/>
							  </div>
							  
							  <div class="form-group" >
								<label for="contenido">Contenido</label>
								<input type="text" class="form-control" id="contenido" name = "contenido" placeholder="contenido de revista" />
							  </div>
							  
							  <div class="form-group">
							  <label for="fecha_creacion">Fecha de creaci&oacute;n</label>
                               <div class='input-group date' id='datetimepicker2'>
								<input type='text' class="form-control" id="fecha_creacion" name = "fecha_creacion" placeholder="Ingresa fecha" />
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
							</div>
							  
							   <div class="form-group">
								<label for="archiv_pdf">archivo pdf</label>
								<input type="file" id="archivo_pdf" name = "archivo_pdf"/>
								<p class="help-block">Carga un archivo pdf</p>
								
								
								<div class="form-group">
							    <label for="id_status">id de status</label>
								<select class="form-control" id="id_status" name = "id_status" placeholder="elige id de status">
								        <option value=""></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										
								</select>
							  </div>
							  </div >
							  <div class="form-group" >
								<label for="conclusiones">Conclusiones</label>
								<input type="text" class="form-control" id="conclusiones" name = "conclusiones" placeholder="conclusion de revista" />
							  </div>
							  
							  <div class="form-group" >
								<label for="agradecimientos">Agradecimientos</label>
								<input type="text" class="form-control" id="agradecimientos" name = "agradecimientos" placeholder="Ingresa agradecimiento"/>
							  </div>
							  
							  <div class="form-group" >
								<label for="referencias">Referencias</label>
								<input type="text" class="form-control" id="referencias" name = "referencias" placeholder="Ingresa referencia"/>
							  </div>
							  
							 
	<div class="hero-unit" style="margin-top:40px">
		<h1 style="font-size:28px">bootstrap-wysihtml5 <small>Simple, beautiful wysiwyg editors</small></h1>
		<hr/>
		<textarea class="textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
	
	
			
</div>
														  
							  
							  
<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>
							  
							  
							  
							  <div>
							  <button type="submit" class="btn btn-default">Enviar</button>
							  </div>
							  
							</form>
				
        	</div>
			<div class="col-md-2">
            		
        	</div>
        </div>
        
	<?php include ('../layouts/footer.php'); ?>