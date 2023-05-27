<?php
class User_model extends CI_Model{
    public function addUser($array){
        return $this->db->insert('users', $array);
    }
    public function check_info($email,$password){
        $this->db->select('*')->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$user_data = $this->db->get()->row(); 
		if($user_data){
			$this->user_data = $user_data;
			return true;
		}
		else{
			return false;
		}
	}
	public function getvalidUser(){
		return $this->user_data;
    }
	public function addedFile($array){
		return $this->db->insert('file', $array);
	}
	public function showFile(){
		$user_id = $this->session->userdata('id');
		$q = $this->db->select('*')
					  ->from('file')
					  ->where('user_id',$user_id)
					  ->get();
					  return $q->result();
	}
}
?>