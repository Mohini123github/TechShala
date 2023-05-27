<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    public function login(){
        $this->load->view('layout/header');
		$this->load->view('common/login');
		$this->load->view('layout/footer');
    }
    public function user(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_numeric');
        if ($this->form_validation->run() == FALSE){
            $this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');
            $this->load->view('layout/header');
            $this->load->view('common/login');
            $this->load->view('layout/footer');
        }else{
             $email = $this->input->post('email');
             $password = $this->input->post('password');
             $info = $this->User_model->check_info($email,$password);
             if($info){
                $userinfo = $this->User_model->getvalidUser();
                $this->session->set_userdata('userinfo',$userinfo);
                $id = $userinfo->id;
                $type = $userinfo->type;
                if($userinfo->type == 'admin'){  
                    if($id){
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('type',$type);
                        return redirect('Dashboard/admin');
                    }
                }elseif($userinfo->type == 'user'){
                    $this->session->set_userdata('id',$id);
                    $this->session->set_userdata('type',$type);
                    return redirect('Dashboard/user');
                }
             }
        }
    }
}
?>