<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {
    public function addUser(){
        $this->load->view('layout/header');
		$this->load->view('common/signup');
		$this->load->view('layout/footer');
    }
}
?>