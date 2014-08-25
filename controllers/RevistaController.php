<?php
/*
Contine las clases 
*/

	class RevistaController extends Revista {
		
		//Instancia de la clase Revista----No necesario para todos los controladores
		public $muestra_errores = false;
		public $muestra_exito = false;
		public $sql_revista = 'select * from revista ';


		function __construct(){
			 parent::Revista();
		}

		//Funcion para insertar una revista
		public function inserta_revista($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos

		    /*echo "<pre>";
		      print_r($_POST);
		      print_r($_FILES);
		    echo "</pre>Desde controller";
		    die();*/
		    
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$revista=new Revista();

			$this->set_nombre($datos['nombre']);
			$this->set_portada($files['portada'],$datos['nombre']);
			$this->set_fecha($datos['fecha']);
			$this->set_volumen($datos['volumen']);
			$this->set_titulo($datos['titulo']);
			$this->set_subtitulo($datos['subtitulo']);
			$this->set_numero($datos['numero']);
			$this->set_clave($datos['clave']);
			$this->set_directorio($datos['directorio']);
			$this->set_editorial($datos['editorial']);
			$this->set_id_status($datos['id_status']);

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores = true;
				
				//print_r($revista->errores);
				/*
				die();*/
			}
			else{
				$this->muestra_exito=true;
				//Copiar la direccion del archivo a un nueva carpeta
				move_uploaded_file($files['portada']['tmp_name'], "../upload/".$datos['nombre']."_".$files['portada']['name']);
				//Insertar en la Base de datos
				$this->inserta($this->get_atributos());
			};

			//Detener un script *die();
		}

		public function errores(){
			if ($this->muestra_errores) {
				echo '<div class="alert alert-danger">';
                	foreach ($this->errores as $value) {
                  	echo "<p>".$value."</p>";
                	}  
            	echo '</div>';
			}
			if ($this->muestra_exito) {
				echo '<div class="alert alert-success" role="alert"><h4>Insercion Correcta</h4></div>';
			}
		}

		public function tableSQL(){
			$data = $this->consulta_sql($this->sql_revista)->getArray(); 
                      
                      /*print_r($data);
                      die();*/

                      foreach ($data as $value) {
                        echo "<tr>";
                          echo "<td>".$value['id_revista']."</td>";
                          //echo "<td>".$value['id_indice']."</td>";
                          echo "<td><strong>".$value['nombre']."</strong></td>";
                          //echo "<td>".$value['titulo']."</td>";
                         echo "<td><a class='btn btn-primary' href='".BASEURL."/views/revista/view_revista.php?id_revista=".$value['id_revista']."' > Mas.</a></td>";
                          echo "<td><a class='btn btn-info' href='".BASEURL."/views/indice/form_indice.php?id_revista=".$value['id_revista']."' > agregar indice.</a></td>";
                        echo "</tr>";
                      }
		}

		public function tableSQLMas($id){
			$sqlMas='select * from revista where id_revista = "'.$id.'"';
			$data = $this->consulta_sql($sqlMas)->getArray(); 

			$sqlMasStatus="select status from status where id_status= '".$data['0']['id_status']."'";
			$data2 = $this->consulta_sql($sqlMasStatus)->getArray(); 

                      /*echo "<pre>";
                      print_r($data);
                      print_r($data2);
                      echo "</pre>";
                      //die();*/

                      foreach ($data as $value) {
                        echo "<tr>";
                        	echo "<th> Id Revista </th>
                        			<th> Nombre </th>
                        			<th> T&iacute;tulo </th>
                        			<th> Subt&iacute;tulo </th>
                        </tr>";
                        echo "<tr>";
                          echo "<td>".$value['id_revista']."</td>";
                          echo "<td>".$value['nombre']."</td>";
                          echo "<td>".$value['titulo']."</td>";
                          echo "<td>".$value['subtitulo']."</td>";
                        echo "</tr>";
                        echo "<tr><td colspan='4'><bt /></td> </tr>";
                        echo "<tr>";
                        	echo "<th> Volumen </th>
                        			<th> N&uacute;mero </th>
                        			<th> Clave </th>
                        			<th> Fecha de creacion </th>
                        </tr>";
                        echo "<tr>";
                          echo "<td>".$value['volumen']."</td>";
                          echo "<td>".$value['numero']."</td>";
                          echo "<td>".$value['clave']."</td>";
                          echo "<td>".$value['fecha']."</td>";
                        echo "</tr>";

                        echo "<tr><td colspan='4'><bt /></td> </tr>";
                        echo "<tr>";
                        	echo "<th colspan ='4'> Estatus </th>
                        			</tr>";
                        echo "<tr>";
                          echo "<td colspan ='4'>".$data2['0']['status']."</td>";
                        echo "</tr>";

                        echo "<tr><td colspan='4'><bt /></td> </tr>";
                        echo "<tr>";
                        	echo "<th colspan ='4'> Portada </th>
                        			</tr>";
                        echo "<tr>";
                          echo "<td colspan ='4'> <img src='../upload/".$value['portada']."'' alt='".$value['portada']."' width= '50%' />  </td>";
                        echo "</tr>";

                        echo "<tr><td colspan='4'><bt /></td> </tr>";
                        echo "<tr>";
                        	echo "<th colspan ='4'> Directorio </th>
                        			</tr>";
                        echo "<tr>";
                          echo "<td colspan ='4'>".$value['directorio']."</td>";
                        echo "</tr>";

                        echo "<tr><td colspan='4'><bt /></td> </tr>";
                        echo "<tr>";
                        	echo "<th colspan ='4'> Editorial </th>
                        			</tr>";
                        echo "<tr>";
                          echo "<td colspan ='4'>".$value['editorial']."</td>";
                        echo "</tr>";

                        echo "<td><a class='btn btn-info' href='".BASEURL."/views/indice/form_indice.php?id_revista=".$value['id_revista']."' > agregar indice.</a></td>";
                      }
		}


		/*public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}
		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}*/
	}
?>
