
  <?php 
  session_start();
  
  
  
 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');
	  include ('../autor/header.php');
  if(isset($_POST['nombre'])){
  
  $autorC = new  AutorController();
  $autorC->insertaAutor($_POST);
  
  
  
  
  }
?>
  
  
  
  
     
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Autor de revista  </h1> </center>
    	</div>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="registro" method="POST">
							  <div class="form-group" method="POST">
								<label for="nombre">Nombre</label>
								<input type="continente" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre del autor">
							  </div>
							  <div class="form-group" method="POST">
								<label for="apellidos">Apellidos</label>
								<input type="continente" class="form-control" id="apellidos" name = "apellidos" placeholder="Ingresa apellidos del autor">
							  </div>
							  <div class="form-group" method="POST">
								<label for="email">Email</label>
								<input type="continente" class="form-control" id="email" name = "email" placeholder="Ingresa email">
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