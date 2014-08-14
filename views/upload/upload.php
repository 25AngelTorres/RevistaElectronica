<?php
	include ('../layouts/url.php');
 
 if(move_uploaded_file($_FILES['file']['tmp_name'], "".$_FILES['file']['name'])){
  //echo "archivo actulizado correctamento";
	//echo "archivo actulizado correctamento";
 }else{
 	//echo "Error en upload file";
 }
 $imagen = array( 'link' => 'http://localhost/RevistaElectronica/views/upload/'.$_FILES['file']['name'] ); 
 
 echo json_encode($imagen);
 
 ?>