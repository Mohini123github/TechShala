<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function user(){
        $this->load->view('layout/header');
		$this->load->view('common/login');
		$this->load->view('layout/footer');
    }
}
?>