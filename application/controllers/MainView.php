<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainView extends CI_Controller {

	public function index()
	{
		$this->load->view('main/mainView');
	}
	public function login(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email_user', 'Email user', 'required');
		$this->form_validation->set_rules('password_user', 'Password user', 'required');

		$email_user = $this->input->post("email_user",true);
		$password_user = $this->input->post("password_user",true);

		$session_id = 1;
			$data = array(
			        'info_user' => $session_id
			);

			$this->db->where('email_user', $email_user);
			$this->db->update('tbl_user', $data);
			

		$query = $this->db->get_where('tbl_user', ['email_user' => $email_user])->row_array();

		if ($query) {
			if ($query['info_user'] == 1) {
				if (password_verify($password_user, $query['password_user'])) {
					$data = [
						'email_user' => $query['email_user'],
						'role_id' => $query['role_id']
					];
					$this->session->set_userdata($data);
					if ($query['role_id'] == 1) {
						redirect(base_url().'Admin');
					}else{
						redirect(base_url().'User');
					}
				}else{
					$this->session->set_flashdata('message','<div class ="alert alert-danger" role="alert">Password yang anda masukkan salah!</div>');
					redirect('MainView');
				}
			}else{
				$this->session->set_flashdata('message','<div class ="alert alert-danger" role="alert">Akun tidak aktif</div>');
					redirect('MainView');
			}
		}else{
			$this->session->set_flashdata('message','<div class ="alert alert-warning" role="alert">Akun belum terdaftar / Form ini tidak boleh kosong</div>');
				redirect('MainView');
		}


	}
}
?>