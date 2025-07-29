<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); // ❗ Fix: 'parent::__construct();' must be inside a method
        $this->load->database();
        $this->load->model('crud_model');
        $this->load->helper('url');
    }

    public function savedata()
    {
        $this->load->view('insert'); // This loads the form

        if ($this->input->post('save')) {
            $data['first_name'] = $this->input->post('first_name'); // Add first_name
            $data['last_name']  = $this->input->post('last_name');
            $data['email']      = $this->input->post('email');

            $response = $this->crud_model->saverecords($data); // Call the model correctly

            if ($response == true) {
                echo "Inserted successfully";
            } else {
                echo "Insert failed";
            }
        }
    }
}
