
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Read extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this ->load->model('Readmodel');

    }
    
    public function displaydata()
    {
        $store['data']= $this->Readmodel ->displayrecords();

        $this->load->view('readview',$store);


    }
}















?>