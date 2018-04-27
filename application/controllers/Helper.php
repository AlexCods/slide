<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends CI_Controller {

	function __construct() {
			parent::__construct();
            $this->load->database();
            $this->load->model('helper_model');
    }
    
    function index(){
        echo "helper controller";
    }

    function getTallas(){
        print_r(json_encode($this->helper_model->getTallas($this->input->post('texto'))));
    }


}