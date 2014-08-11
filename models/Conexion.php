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
        $this->db = ADONewConnection('mysqli');
        $this->db->debug = false;
			       //ip     user      pass    bd
        $this->db->Connect('localhost','industrial_usr','L34S6P3','industrial_db');
    }
    
}

?>
