<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
    	$data['title'] = 'Halaman Pengguna';
        $this->load->view('dashboard/dashboard__',$data);
        $this->load->view('dashboard/dashboard');
        $this->load->view('dashboard/dashboard_');
    }
    public function buku(){
    	$data['title'] = 'Buku';
    	$this->load->view('dashboard/dashboard__',$data);
        $this->load->view('page_user/buku');
        $this->load->view('dashboard/dashboard_');
    }
    public function notifikasi(){
    	$data['title'] = 'Notifikasi';
    	$this->load->view('dashboard/dashboard__',$data);
        $this->load->view('page_user/notifikasi');
        $this->load->view('dashboard/dashboard_');
    }
    public function profil(){
    	$data['title'] = 'Profil';
    	$this->load->view('dashboard/dashboard__',$data);
        $this->load->view('page_user/profil');
        $this->load->view('dashboard/dashboard_');
    }
    public function transaksi(){
    	$data['title'] = 'Transaksi';
    	$this->load->view('dashboard/dashboard__',$data);
        $this->load->view('page_user/transaksi');
        $this->load->view('dashboard/dashboard_');
    }
    public function logout(){
    	$email_user = $_SESSION['email_user'];
    	$query = $this->db->get_where('tbl_user', ['email_user' => $email_user])->row_array();
    	if ($query) {
    		$session_id = '0';
			$data = array(
			        'info_user' => $session_id
			);

			$this->db->where('email_user', $email_user);
			$this->db->update('tbl_user', $data);
    	}

    	session_destroy();
    	redirect(base_url().'?sessionEnd');
    }

}
?>