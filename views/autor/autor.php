
  <?php 
  session_start();
 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');

	  include ('../layouts/header.php');

  if(isset($_POST['nombre'])){
  
  $autorC = new  AutorController();
  $autorC->insertaAutor($_POST);
  

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
  
  
  
  <div class="container theme-showcase" role="main"  style="background:url(../img/fondo.jpg)">
     
    	<div class="row">
            <div class="col-md-12"><center>
              <div class="page-header">
                <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Autor <small>Insertar</small></h1>
              </div>
              </center>
            </div>
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
      </div>
    </section>
        
	<?php include ('../layouts/footer.php'); ?>