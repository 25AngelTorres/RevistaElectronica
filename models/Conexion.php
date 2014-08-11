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
<<<<<<< HEAD
        $this->db->Connect('localhost','RevistaProyecto','1234RP','revista');
		//$this->db->Connect('localhost','ale','1234','revista');

=======
       $this->db->Connect('localhost','RevistaProyecto','1234RP','revista');
>>>>>>> 0c5662ee4d437e2b026bf7f59503a2557c91835f
    }
    
}

?>
