<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    public function addUser(){
        $this->load->view('layout/header');
		$this->load->view('common/signup');
		$this->load->view('layout/footer');
    }
    public function ragister(){
        $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_numeric');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric');
        if ($this->form_validation->run('signup') == FALSE){
            $this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');
            $this->load->view('layout/header');
            $this->load->view('common/signup');
            $this->load->view('layout/footer');
        }else{
            $post = $this->input->post();
            $this->User_model->addUser($post);
            $this->session->set_flashdata('status', 'User Ragistered Successfully..');
            return redirect('SignUp/addUser');
        }
    }
}
?>