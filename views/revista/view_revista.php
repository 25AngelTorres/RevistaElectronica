<!-- Vista de Revista-->
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
?>

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
                <h1> <a href="form_revista.php"><span class="glyphicon glyphicon-th"></span></a> Vista <small>Revista</small></h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
		  		<a class='btn btn-info'
			  		href='form_revista.php'>
			  		Regresar
			  	</a>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-12">
	  			<br />
	  		</div>
	  	</div>

		  	<div class="row">
		  		<div class="col-md-12">
	  		
		        	<table class="table table-striped">
		                <?php 
		                	$data = $RevistaC->tableSQLMas($_GET['id_revista']); 
		                ?>
		        	</table>
		        </div>
        	</div> <!--row-->
        </div> <!-- Container -->
    </section>            
	<?php include ('../layouts/footer.php'); ?>
