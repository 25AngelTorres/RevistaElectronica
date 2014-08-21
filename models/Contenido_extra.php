<?php

class Contenido_extra extends Modelo{
   public $nombre_tabla = 'contenido_extra';
   public $pk = 'id_contenido_extra';
   
   
   public $atributos = array(
        'nombre'=>array(),
    	  'contenido'=>array(),
        'archivo_pdf'=>array(),
        'id_tipo_contenido'=>array(),
   );
   
   public $errores = array( );
   
   private $nombre;
   private $contenido;
   private $archivo_pdf;
   private $id_tipo_contenido;
   
   function Contenido_extra(){
       parent::Modelo();
   }
   
   public function get_atributos(){
       $rs = array();
       foreach ($this->atributos as $key => $value) {
           $rs[$key]=$this->$key;
       }
       return $rs;
   }
   

/**Nombre**/   
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
    
/**Contenido**/    
	 public function get_contenido(){
       return $this->contenido;
   } 
   public function set_contenido($valor){
       $er = new Er();
       if ( !$er->valida_noVacio($valor) ){
           $this->errores[] = "Contenido vacio.";
       }
       $this->contenido = trim($valor);
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
        if ( $valor['size']>102400000){
            $this->errores[] = 'Tamaño de imagen ('.$valor["size"].'). Sobrepasa el tamaño maximo';
        }
        //trim quita espacios al principio y final de la cadena
        $this->archivo_pdf = trim($valor['name']);
    }
 
/**id_tipo_contenido**/
   public function get_id_tipo_contenido(){
       return $this->id_tipo_contenido;
   } 
   public function set_id_tipo_contenido($valor){
       $er = new Er();
       if ( !$er->valida_numero_entero($valor) ){
           $this->errores[] = "Este tipo de contenido (".$valor.") no es valido";
       }
       $this->id_tipo_contenido = trim($valor);
   }
   
   
 
	 
}


?>
