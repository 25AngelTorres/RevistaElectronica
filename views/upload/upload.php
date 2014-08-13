<?php
//print_r($_FILES);
//print_r($_POST);
//print_r($_GET);
 
 if(move_uploaded_file($_FILES['file']['tmp_name'], "".$_FILES['file']['name'])){
  echo "archivo actulizado correctamento";
	//echo "archivo actulizado correctamento";
 }else{
 	echo "Error en upload file";
 }
 $imagen = array( 'link' => 'http://localhost:8080/RevistaElectronica/views/upload/'.$_FILES['file']['name'] ); 
 
 echo json_encode($imagen);
 
 ?>