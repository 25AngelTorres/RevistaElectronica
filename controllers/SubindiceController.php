<?php
/*
Contine las clases 
*/

	class SubindiceController extends Subindice {
		
		//Instancia de la clase indice----No necesario para todos los controladores
		public $muestra_errores = false;
		public $muestra_exito = false;
		//Consultas para header
			public $header1='SELECT i.titulo, r.nombre
							FROM indice i
							JOIN revista r ON r.id_revista = i.id_revista
							';
		//
		//
		//actualiza_expandido


		function __construct(){
			 parent::Subindice();
		}

		//Funcion para insertar un equipo
		public function inserta_Subindice($datos,$idIndice){
			//Solo es para acegurarse que se estan enviando los archivos
		    /*echo "<pre>";
		    print_r($datos);
		    echo   'Desde Controller';

		    echo "</pre>";
		    die();*/
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$autor=new Autor();

			$this->set_id_indice($idIndice);
			$this->set_numero($datos['numero']);

			$recordset = array();
			$recordset['id_articulo']=$datos['id_articulo'];

			//$this->set_id_articulo($datos['id_articulo']);

			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
				/*print_r($autor->errores);
				die();*/
			}
			else{
				$this->muestra_exito=true;
				//Insertar en la Base de datos
				$this->inserta($this->get_atributos());			
										//TABLA, ID, Columnas Array
				//$this->actualiza_expandido("articulo",$datos['id_articulo'],$recordset);
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

		public function header($where){
			$this->header1.=' where i.id_indice="'.$where.'"';
			$query=$this->header1;
			$data = $this->consulta_sql($query)->getArray();
			/*echo '<pre>';
			print_r($data);
			echo '</pre>';*/
			echo '
				<div class="page-header">
                  <h3> <a href="../indice/form_indice.php"><span class="glyphicon glyphicon-th"></span></a>
                  Insertar art&iacute;culos para el &iacute;ndice "<i>'.$data['0']['titulo'].'</i>" de la revista "<i>'.$data['0']['nombre'].'</i>".</h3>
                  </div>';
		}

		public function tableSQL(){
			$query = 'SELECT r.nombre AS Revista, i.titulo AS Indice, a.nombre AS Articulo, ia.numero AS Pagina
						FROM indice_articulo ia
						JOIN articulo a ON a.id_indice_articulo = ia.id_indice_articulo
						JOIN indice i ON ia.id_indice = i.id_indice
						JOIN revista r ON i.id_revista = r.id_revista
						';
			$data = $this->consulta_sql($query)->getArray();
			/*echo '<pre>';
			print_r($data);
			echo '</pre>';*/
			echo '<table class="table">';
			echo '<tr>
					<th>Revista</th>
					<th>&Iacute;ndice</th>
					<th>Art&iacute;culo</th>
					<th>P&aacute;gina</th>
				</tr>';
			foreach ($data as $value) {
                        echo "<tr>";
                          echo "<td>".$value['Revista']."</td>";
                          //echo "<td>".$value['id_indice']."</td>";
                          
                          echo "<td>".$value['Indice']."</td>";
                          echo "<td>".$value['Articulo']."</td>";
                          echo "<td>".$value['Pagina']."</td>";
                          
                        echo "</tr>";
                      }
             echo '</table>';

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