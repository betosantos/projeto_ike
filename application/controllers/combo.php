<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Combo extends CI_Controller {

    public function index() {        
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('datatables');
        $this->load->view('includes/footer');
    }


}
