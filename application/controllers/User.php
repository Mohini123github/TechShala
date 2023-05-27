<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    public function callModal(){
        $html = $this->load->view('common/modal.php',[],true);
        $response['html'] = $html;
        echo json_encode($response);
    }
    public function addfile(){
        $this->form_validation->set_rules('file_name', 'File Name', 'required');
        if ($this->form_validation->run() == true) {
            $response['status'] = 1;
            $post = $this->input->post();
            $this->User_model->addedFile($post);
        }else{
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $response['status'] = 0;
            $response['file_name'] = strip_tags(form_error('file_name'));
        }
        header("Content-Type:application/json");
        echo json_encode($response);
    }
}
?>