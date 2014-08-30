<?php

class Subindice extends Modelo{
    public $nombre_tabla = 'indice_articulo';
    public $pk           = 'id_indice_articulo';
    
    public $atributos = array(
        'id_indice'=>array(),
        'numero'=>array(),
    );

    public $errores = array( );
    
    private $id_indice;
	
	private $numero;
       

//Instancia del objeto modelo para implementar la conexion con la base de datos
    function Subindice(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
            foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
//id_indice
    public function get_id_indice(){
        return $this->id_indice;
    } 
    public function set_id_indice($valor){
        //objeto de la clase Er
         $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'id_indice no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->id_indice = trim($valor);
    }
//numero
    public function get_numero(){
        return $this->numero;
    } 
    public function set_numero($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'Numero no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->numero = trim($valor);
    }
//id_articulo
   /*public function get_id_articulo(){
        return $this->id_articulo;
    } 
    public function set_id_articulo($valor){
        //objeto de la clase Er
        $er = new Er();
        if ( !$er->valida_numero_entero($valor) ){
            $this->errores[] = 'id_articulo no valido ('.$valor.').';
        }
        //trim simplemente quita espacios al principio y final de la cadena
        $this->id_articulo = trim($valor);
    }*/
}

?>
