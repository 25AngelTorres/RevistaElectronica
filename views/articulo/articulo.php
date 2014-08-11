<?php 
//VISTA PRIVADA
      include ('../../libs/security.php');
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
    $articuloC->error();
  
  
  
  
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

  <div class="container theme-showcase" role="main"  style="background:url(../img/fondo.jpg)">
  
     
    	<div class="row">
            <div class="col-md-12"><center>
              <div class="page-header">
                <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Articulos <small>Insertar</small></h1>
              </div>
            </center></div>
          </div>
		<div class="row">
        	<div class="col-md-2">
            	
        	</div>
            <div class="col-md-8">
						    <form class="registro" method="POST" enctype="multipart/form-data">
							  <div class="form-group" >
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre de la revista" />
							  </div>
							  
							  
							  <div class="form-group" >
								  <label for="resumen">Resumen</label>
								  <div id='edit' name = "resumen" style="  background-color:rgba(255,255,255,1);">  </div>	
                                </div>	
								
									
								
								<div class="form-group" >
								  <label for="abstrac">Abstracci&oacute;n</label>
								  <div id='edit1' name = "abstrac" style="  background-color:rgba(255,255,255,1);">  </div>	
                                </div>	
								
								<div class="form-group" >
								  <label for="introduccion">Introducci&oacute;n</label>
								  <div id='edit2' name = "introduccion" style="  background-color:rgba(255,255,255,1);">  </div>	
                                </div>	
								
								<div class="form-group" >
								  <label for="metodologia">Metodologia</label>
								  <div id='edit3' name = "metodologia"style="  background-color:rgba(255,255,255,1);">  </div>	
                                </div>	
								
								<div class="form-group" >
								 <label for="contenido">Contenido</label>
								  <div id='edit4' name = "contenido"style="  background-color:rgba(255,255,255,1);">  </div>	
                                </div>	
							  
						  
							  <div class="form-group">
							      <label for="fecha_creacion">Fecha de creaci&oacute;n</label>
                                      <div class='input-group date' id='datetimepicker2'>
								          <input type='text' class="form-control" id="fecha_creacion" name = "fecha_creacion" placeholder="Ingresa fecha" />
								          <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span>
								         </span>
							          </div>
							  </div>
							  
							  <div class="form-group">
								<label for="archiv_pdf">archivo pdf</label>
								<input type="file" id="archivo_pdf" name = "archivo_pdf"/>
								<p class="help-block">Carga un archivo pdf</p>
							  </div>
								
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
							  
							 
							  
							  <div class="form-group" >
								  <label for="conclusiones">Conclusiones</label>
								  <div id='edit5' name = "conclusiones" style="  background-color:rgba(255,255,255,1);">  </div>	
                                </div>	
							  
							  <div class="form-group" >
								<label for="agradecimientos">Agradecimientos</label>
								<input type="text" class="form-control" id="agradecimientos" name = "agradecimientos" placeholder="Ingresa agradecimiento"/>
							  </div>
							  
							  <div class="form-group" >
								<label for="referencias">Referencias</label>
								<input type="text" class="form-control" id="referencias" name = "referencias" placeholder="Ingresa referencia"/>
							  </div>
							  
							  
							
                            
                               
									
									
									
							


							  
							  
							  
							  
							  
							  <div>
							  <button type="submit" class="btn btn-default">Enviar</button>
							  </div>
							  
							</form>
							
				
        	</div>
			<div class="col-md-2">
            		
        	</div>
        </div>
        
	<?php include ('../layouts/footer.php'); ?>