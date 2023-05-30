<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    public function admin(){
        if(!$this->session->userdata('id')){
            return redirect('Login/login');
        }
        $this->load->view('layout/header.php');
        $this->load->view('common/dashboard/admin.php');
        $this->load->view('layout/footer.php');
    }
    public function user(){
        if(!$this->session->userdata('id')){
            return redirect('Login/login');
        }
        $this->load->view('layout/header.php');
        $this->load->view('common/dashboard/user.php');
        $this->load->view('layout/footer.php');
    }
    public function compiler(){
        
        $html = $this->load->view('common/compiler.php');
        $response['html'] = $html;
        echo json_encode($response);
    }
    public function workspace(){
        $data['file'] = $this->User_model->showFile();
        $html = $this->load->view('common/dashboard/workspace.php',$data);
        $response['html'] = $html;
        echo json_encode($response);
    }
    public function settings(){
        $html = $this->load->view('common/dashboard/settings.php');
        $response['html'] = $html;
        echo json_encode($response);
    }
    public function file(){
        $data['file'] = $this->User_model->showFile();
        $html = $this->load->view('common/dashboard/file.php',$data);
        $response['html'] = $html;
        echo json_encode($response);
    }
    public function logout(){
        if($this->session->has_userdata('id')){
			$this->session->unset_userdata('id');
			return redirect('Login/login');
		}
    }
}
?>