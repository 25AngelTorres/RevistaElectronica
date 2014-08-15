<?php
	class ArticuloController  extends Articulo{
		
		public $muestra_errores = false;
		public $muestra_exito = false;
		
		public $sql_autor = "
			SELECT * 
			FROM (articulo ar JOIN articulo_autor a ON ar.id_articulo = a.id_articulo) JOIN autor au ON a.id_autor = au.id_autor
			
		";
		public $sql_articulos = "
			SELECT * 
			FROM articulo
			
		";
		
		function __construct(){
		parent::Articulo();
			
		}
		
		public function insertaArticulo($datos,$archivo){
			/*echo "<pre>datos:";
  	  		print_r($datos);
			print_r($archivo);			
	  		echo "</pre>";*/
			//$articulo= new Articulo();
		    $this->set_nombre($datos['nombre']);
			$this->set_resumen($datos['resumen']);
			$this->set_abstrac($datos['abstrac']);
			$this->set_introduccion($datos['introduccion']);
			$this->set_metodologia($datos['metodologia']);
			$this->set_contenido($datos['contenido']);
			$this->set_fecha_creacion($datos['fecha_creacion']);
			/*Archivo pdf opcional*/
			if($archivo['archivo_pdf']['name']!=''){
				$this->set_archivo_pdf($archivo['archivo_pdf']);
			}
			$this->set_id_status($datos['id_status']);
			$this->set_conclusiones($datos['conclusiones']);
			$this->set_agradecimientos($datos['agradecimientos']);
			$this->set_referencias($datos['referencias']);
			
		
			
			
			
			
			if(count($this->errores)>0)
			{
				//print_r($this->errores);
					//die();
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