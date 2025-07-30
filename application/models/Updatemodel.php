<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatemodel extends CI_Model
{
    public function displayrecords()
    {
        $query = $this->db->get('crud');
        return $query->result(); // returns all rows
    }

    public function displayrecordsById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('crud');
        return $query->row(); // returns single row as object
    }

    public function updaterecords($first_name, $last_name, $email, $id)
    {
        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email
        );
        $this->db->where('id', $id);
        return $this->db->update('crud', $data);
    }
}
?>
