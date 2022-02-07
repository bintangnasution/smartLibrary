<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterView extends CI_Controller {

	public function index()
	{
		$this->load->view('main/registerView');	
	}
	public function registration(){

		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama_user', 'Nama user', 'required');
		$this->form_validation->set_rules('kelas_user', 'Kelas user', 'required');
		$this->form_validation->set_rules('email_user', 'Email user', 'required');

		$id_user ="";
		$nama_user = $this->input->post("nama_user",true);
		$kelas_user = $this->input->post("kelas_user",true);
		$email_user = $this->input->post("email_user",true);
		$status_user = "Belum Aktif";
		$info_user = "1";
		$password_user = $this->input->post("password_user",true);
		$cpassword = $this->input->post("cpassword",true);
		$cpassword = password_hash($cpassword, PASSWORD_BCRYPT);

		if($password_user == $cpassword){
			$data = array(
			'id_user' => $id_user,
			'nama_user' =>$nama_user,
			'kelas_user' =>$kelas_user,
			'email_user' => $email_user,
			'status_user' => $status_user,
			'info_user' => $info_user,
			'password_user' => password_hash($password_user, PASSWORD_BCRYPT)
			);
			$this->db->insert('tbl_user', $data);
			redirect('MainView');
		}else{
			redirect('RegisterView?error');
		}

		


	}
}
?>