<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
		$this->load->model('Admin_model');
	}


	public function index() {
		$x['data'] = $this->Admin_model->show_barang();
		$this->load->view('admin_view_aturstok',$x);
	}

	public function view_aturstokbarang() {
		$this->index();
	}

	public function view_tambahbarang() {
		$this->load->view('admin_view_tambahbarang');
	}

	public function view_edithapusbarang() {
		$x['data'] = $this->Admin_model->show_barang();
		$this->load->view('admin_view_edithapusbarang',$x);
	}

	function tambah_barang() {
		$nama_barang = $this->input->post('nama_barang');
		$jenis_barang = $this->input->post('jenis_barang');
		$harga_barang = $this->input->post('harga_barang');
		$stok_barang = $this->input->post('stok_barang');
		$this->Admin_model->tambah_barang($nama_barang,$jenis_barang,$harga_barang,$stok_barang);
		redirect('Admin');
	}

	function tambah_stok_barang() {
		$ID_barang = $this->input->post('ID_barang');
		$stok_barang_semula = $this->input->post('stok_barang_semula');
		$jumlah_masuk = $this->input->post('jumlah_masuk');
		$stok_barang = $stok_barang_semula + $jumlah_masuk;
		$this->Admin_model->atur_stok_barang($ID_barang,$stok_barang);
		redirect('Admin');
	}

	function kurangi_stok_barang() {
		$ID_barang = $this->input->post('ID_barang');
		$stok_barang_semula = $this->input->post('stok_barang_semula');
		$jumlah_keluar = $this->input->post('jumlah_keluar');
		$stok_barang = $stok_barang_semula - $jumlah_keluar;
		$this->Admin_model->atur_stok_barang($ID_barang,$stok_barang);
		redirect('Admin');
	}

	function ubah_barang() {
		$ID_barang = $this->input->post('ID_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jenis_barang = $this->input->post('jenis_barang');
		$harga_barang = $this->input->post('harga_barang');
		$this->Admin_model->ubah_barang($ID_barang,$nama_barang,$jenis_barang,$harga_barang);
		redirect('Admin');
	}

	function hapus_barang() {
		$ID_barang=$this->input->post('ID_barang');
		$this->Admin_model->hapus_barang($ID_barang);
		redirect('Admin');
	}
}