<?php

class Articulo extends Modelo{
   public $nombre_tabla = 'articulo';
   public $pk = 'id_articulo';
   
   
   public $atributos = array(
        'nombre'=>array(),
	    'resumen'=>array(),
	    'abstrac'=>array(),
		'introduccion'=>array(),
		'metodologia'=>array(),
		'contenido'=>array(),
		'fecha_creacion'=>array(),
		'archivo_pdf'=>array(),
		'id_status'=>array(),
		'conclusiones'=>array(),
		'agradecimientos'=>array(),
		'referencias'=>array(),
   );
   
   public $errores = array( );
   
   private $nombre;
   private $resumen;
   private $abstrac;
   private $introduccion;
   private $metodologia;
   private $contenido;
   private $fecha_creacion;
   private $archivo_pdf;
   private $id_status;
   private $conclusiones;
   private $agradecimientos;
   private $referencias;
   

         
   function Articulo(){
       parent::Modelo();
   }
   
   public function get_atributos(){
       $rs = array();
       foreach ($this->atributos as $key => $value) {
           $rs[$key]=$this->$key;
       }
       return $rs;
   }
   
   
   public function get_nombre(){
       return $this->nombre;
   } 

   public function set_nombre($valor){

       $er = new Er();
       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Este nombre (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
       
   }
    
	
	 public function get_resumen(){
       return $this->resumen;
   } 

   public function set_resumen($valor){

       $er = new Er();
       
       if ( !$er->valida_noVacio($valor) ){
           $this->errores[] = "Datos no validos  (".$valor.") no es valido";
       }

              
       $this->resumen = trim($valor);
       
   }
   
   
   public function get_abstrac(){
       return $this->abstrac;
   } 

   public function set_abstrac($valor){

       $er = new Er();
       
       if ( !$er->valida_noVacio($valor) ){
           $this->errores[] = "Este abstrac (".$valor.") no es valido";
       }

              
       $this->abstrac = trim($valor);
       
   }
   
   public function get_introduccion(){
       return $this->introduccion;
   } 

   public function set_introduccion($valor){

       $er = new Er();
       
       if ( !$er->valida_noVacio($valor) ){
           $this->errores[] = "Este introduccion (".$valor.") no es valido";
       }

              
       $this->introduccion = trim($valor);
       
   }
   
   
   public function get_metodologia(){
       return $this->metodologia;
   } 

   public function set_metodologia($valor){

       $er = new Er();
       
       if ( !$er->valida_noVacio($valor) ){
           $this->errores[] = "Este metodologia (".$valor.") no es valido";
       }

              
       $this->metodologia = trim($valor);
       
   }
   
   
   public function get_contenido(){
       return $this->contenido;
   } 

   public function set_contenido($valor){

       $er = new Er();
       
       if ( !$er->valida_noVacio($valor) ){
           $this->errores[] = "Este contenido (".$valor.") no es valido";
       } 

              
       $this->contenido = trim($valor);
       
   }
   
   
   
   public function get_fecha_creacion(){
       return $this->fecha_creacion;
   } 

   public function set_fecha_creacion($valor){

       $er = new Er();
       
       if ( !$er->valida_fecha($valor) ){
           //$this->errores[] = "Este fecha_creacion (".$valor.") no es valido";
       }

              
       $this->fecha_creacion = trim($valor);
       
   }
   
//archivo_pdf
   public function get_archivo_pdf(){
        return $this->archivo_pdf;
    } 
    public function set_archivo_pdf($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_pdf_name($valor['name']) ){
            $this->errores[] = 'Formato del archivo no es valido ('.$valor["name"].').';
        }
        if ( !$er->valida_pdf_type($valor['type']) ){
            $this->errores[] = 'Formato del archivo no es valido ('.$valor["type"].').';
        }
        if ( $valor['size']>10000000){
            $this->errores[] = 'Tamaño de imagen ('.$valor["size"].'). Sobrepasa el tamaño maximo';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->archivo_pdf = trim($valor['name']);
    }
 
   
   public function get_id_status(){
       return $this->id_status;
   } 

   public function set_id_status($valor){

       $er = new Er();
       
       if ( !$er->valida_numero_entero($valor) ){
           $this->errores[] = "Este id_status (".$valor.") no es valido";
       }

              
       $this->id_status = trim($valor);
       
   }
   
   
   public function get_conclusiones(){
       return $this->conclusiones;
   } 

   public function set_conclusiones($valor){

       $er = new Er();
       
      if ( !$er->valida_noVacio($valor) ){
           $this->errores[] = "Este conclusiones (".$valor.") no es valido";
       }

              
       $this->conclusiones = trim($valor);
       
   }
   
   
   public function get_agradecimientos(){
       return $this->agradecimientos;
   } 

   public function set_agradecimientos($valor){

       $er = new Er();
       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Este agradecimiento (".$valor.") no es valido";
       }

              
       $this->agradecimientos = trim($valor);
       
   }
   
   
   public function get_referencias(){
       return $this->referencias;
   } 

   public function set_referencias($valor){

       $er = new Er();
       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Esta refencia (".$valor.") no es valido";
       }

              
       $this->referencias = trim($valor);
       
   }
   
   
   
	 
}


?>
