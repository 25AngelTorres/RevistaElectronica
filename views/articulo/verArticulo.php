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
	  		href='articulo.php'>
	  		Regresar
	  	</a><hr>
         <table class="table table-striped">
                    <?php 

                    $data = $articuloC->verArticulo($_GET['id_articulo']); 
					  
                    foreach ($data as $value) {
                          echo "<tr>";
                          echo "<td><strong>Nombre del articulo</strong> </br>".$value['nombre'];
						  echo "</tr>";
				        //foreach ($data2 as $value) {
						//  echo "<tr>";
                        //  echo "<td><strong>Autor</strong></br><center>".$value['nombre']."</center></td>";
						//  echo "</tr>";
						//}
						  echo "<tr>";
						  		echo "<td><strong>Resumen</strong></br></br>".$value['resumen']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>Abstract</strong></br></br>".$value['abstrac']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>Introducción</strong> </br></br>".$value['introduccion']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>Materiales y metodos</strong></br></br>".$value['metodologia']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>Resultados y discución</strong> </br></br>".$value['contenido']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>Conclusiones</strong> </br></br>".$value['conclusiones']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>Agredecimentos</strong></br></br>".$value['agradecimientos']."</td>";
						  echo "</tr>";
						  echo "<tr>";
						  		echo "<td><strong>Referencias</strong></br></br>".$value['referencias']."</td>";
						  echo "</tr>";

						  echo "<tr>";
						  		if(trim($value['archivo_pdf']) != '')
						  		echo "<td><strong>Archivo PDF</strong></br>
						  			</br>
						  			<iframe src='".BASEURL."/views/upload/".$value['archivo_pdf']."' width='600' height='800' >
						  			</iframe>
					  			</td>";
						  echo "</tr>";
                    }


                    ?>
                    </table>
        </section>            
	<?php include ('../layouts/footer.php'); ?>