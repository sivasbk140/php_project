<?php
class Crud_model extends CI_Model {

    public function saverecords($data)
    {
        $this->db->insert('crud', $data);
        return true;
    }
}
?>
