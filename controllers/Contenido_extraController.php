<?php
	class Contenido_extraController  extends Contenido_extra{
		
		public $muestra_errores = false;
		public $muestra_exito = false;
		
		public $sql_contenido = "
			SELECT * 
			FROM contenido_extra
		";
		
		
		
		function __construct(){
			parent::Contenido_extra();
		}
		
		public function verContenido($id_contenido_extra){
			parent::Contenido_extra();
			$sql = "
				SELECT * 
					FROM Contenido_extra
					

					
			";
			return $this->consulta_sql($sql)->getArray();
		}

		
		public function insertaContenido_extra($datos,$archivo){
			
		    $this->set_nombre($datos['nombre']);
			$this->set_contenido($datos['contenido']);
			/*Archivo pdf opcional*/
			if($archivo['archivo_pdf']['name']!=''){
				$this->set_archivo_pdf($archivo['archivo_pdf']);
			}
			$this->set_id_tipo_contenido($datos['id_tipo_contenido']);
			
			if(count($this->errores)>0)
			{
				$this->muestra_errores = true;
			}
			else{
				$this->muestra_exito=true;
				
				move_uploaded_file($archivo['archivo_pdf']['tmp_name'],"../upload/".$archivo['archivo_pdf']['name']);
				$this->inserta($this->get_atributos());
				
			}
			
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
	}

		
		
		
/*			
		public function error() {
		 
			  if($this->muestra_errores)
			  {
				  
				echo '<div class="alert alert-danger">';
				    foreach($this->errores as  $value)
					{
				      echo "<p>$value</p>";
				    }
				 echo' </div>';
				 
			  }
		}
		
		
		
		public function validaUsuario($datos){
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
		}

	}*/


?>