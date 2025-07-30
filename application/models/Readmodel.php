<?php
 
 class Readmodel extends CI_Model
 {
    public function displayrecords()
    {
        $query = $this->db->get('crud');
        return $query->result();
        
    }
 }





?>