<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('updatemodel');
        $this->load->helper('url');
    }

    // Show all records
    public function displaydata()
    {
        $data['data'] = $this->updatemodel->displayrecords();
        $this->load->view('updatedisplay', $data);
    }

    // Load update form for specific ID
    public function edit($id)
    {
        $result['data'] = $this->updatemodel->displayrecordsById($id);
        $this->load->view('updateview', $result);
    }

    // Handle update form submission
    public function updatedata()
    {
        if ($this->input->post('update')) {
            $id = $this->input->post('id');
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');

            $this->updatemodel->updaterecords($first_name, $last_name, $email, $id);
            redirect('update/displaydata');
        } else {
            echo "Invalid request.";
        }
    }
}
?>
