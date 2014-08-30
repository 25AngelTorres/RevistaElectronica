<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
  include ('../layouts/url.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Contenido_extra.php');
  include ('../../controllers/Contenido_extraController.php');
  include ('../../libs/Er.php');

  include ('../layouts/header.php');    
  
	  $contenidoC = new  Contenido_extraController();
	  
?>

    <!-- Header -->
    <header id="headerP">
        <div class="container">
            <div class="intro-text">                
            </div>
        </div>
    </header>

	<section  class="bg-light-gray">
  		<a class='btn btn-info'
	  		href='form_contenido_extra.php'>
	  		Regresar
	  	</a><hr>
         <table class="table table-striped">
                    <?php 

                    $data = $contenidoC->verContenido($_GET['id_contenido_extra']); 
					  
                    foreach ($data as $value) {
                          echo "<tr>";
                          echo "<td><strong>Nombre del contenido</strong> </br>".$value['nombre'];
						  echo "</tr>";
				             echo "<tr>";
						  		if(trim($value['archivo_pdf']) != '')
						  		echo "<td><strong>Archivo PDF</strong></br>
						  			</br>
						  			<iframe src='".BASEURL."/views/upload/".$value['archivo_pdf']."' width='600' height='800' >
						  			</iframe>
					  			</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>tipo de contenido</strong></br></br>".$value['id_tipo_contenido']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>indice articulo</strong></br></br>".$value['id_indice_articulo']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>contenido</strong> </br></br>".$value['contenido']."</td>";
						  echo "</tr>";
						  
						  
                    }


                    ?>
                    </table>
        </section>            
	<?php include ('../layouts/footer.php'); ?>