<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Oscar 
 */
class Conexion {
    
    
    function Conexion(){
        $this->db = ADONewConnection('mysql');
        $this->db->debug = false;
			       //ip     user      pass    bd
       // $this->db->Connect('localhost','25revista','angel','revista');
		$this->db->Connect('localhost','ale','1234','revista');

    }
    
}

?>
