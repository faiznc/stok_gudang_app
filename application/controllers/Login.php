<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	function auth() {
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$result = $this->Login_model->check_user($username, $password);
		if($result->num_rows() > 0) {
			$data = $result->row_array();
			$username = $data['username'];
			$nama_pegawai = $data['nama_pegawai'];
			$sesdata = array(
				'username' => $username,
				'nama_pegawai' => $nama_pegawai,
				'logged_in'  => TRUE
			);
			$this->session->set_userdata($sesdata);
			redirect('Admin');
		} else {
			echo "<script>alert('Kami tidak dapat menemukan akun anda. Silahkan cek kembali username atau password anda');history.go(-1);</script>";
		}
		$this->load->view('login_view');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}
}