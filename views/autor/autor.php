<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');

	  include ('../layouts/header.php');

	  $autorC = new  AutorController();
      if(isset($_POST['nombre'])){
      
	  $autorC->inserta_autor($_POST);
      
  

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
            <div class="col-md-12"><center>
              <div class="page-header">
                <h1> <a href="../site/BD.php"><span class="glyphicon glyphicon-th"></span></a> Autor <small>Insertar</small></h1>
              </div>
              </center>
            </div>
          </div>
          <?PHP $autorC->errores(); ?>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="form-horizontal" id="registerForm"  method="POST">
							  <div class="form-group" >
								<label class="col-lg-2 control-label" for="nombre">Nombre</label>
								<div class="col-lg-9">
								<input type="continente" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre del autor" value="<?php echo $autorC->get_nombre(); ?>"/>
							  </div>
							  </div>
							  <div class="form-group" >
								<label class="col-lg-2 control-label" for="apellidos">Apellidos</label>
								<div class="col-lg-9">
								<input type="continente" class="form-control" id="apellidos" name = "apellidos" placeholder="Ingresa apellidos del autor" value="<?php echo $autorC->get_apellidos(); ?>"/>
							  </div>
							  </div>
							  <div class="form-group" >
								<label class="col-lg-2 control-label" for="email">Email</label>
								<div class="col-lg-9">
								<input type="continente" class="form-control" id="email" name = "email" placeholder="Ingresa email" value="<?php echo $autorC->get_email(); ?>"/>
							  </div>
							  </div>
							  <div>
							  <button type="submit" class="btn btn-default">Enviar</button>
							  </div>
							  
							</form>
				
        	</div>
			<div class="col-md-2">
            		
        	</div>
        </div>


  <div class="row">
        <div class="col-md-12">
                
                <?php echo $autorC->show_grid(); ?>
                
                </div>
              </div>


		
      </div>
    </section>
        
	<?php include ('../layouts/footer.php'); ?>