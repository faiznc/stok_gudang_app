<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function show_barang(){
		$hasil=$this->db->query("SELECT * FROM barang");
		return $hasil;
	}

	function tambah_barang($nama_barang,$jenis_barang,$harga_barang,$stok_barang){
		$hasil=$this->db->query("INSERT INTO barang (nama_barang,jenis_barang,harga_barang,stok_barang) VALUES ('$nama_barang','$jenis_barang','$harga_barang','$stok_barang')");
		return $hasil;
	}

	function atur_stok_barang($ID_barang,$stok_barang){
		$hasil=$this->db->query("UPDATE barang SET stok_barang='$stok_barang' WHERE ID_barang='$ID_barang'");
		return $hasil;
	}

	function ubah_barang($ID_barang,$nama_barang,$jenis_barang,$harga_barang){
		$hasil=$this->db->query("UPDATE barang SET nama_barang='$nama_barang',jenis_barang='$jenis_barang',harga_barang='$harga_barang' WHERE ID_barang='$ID_barang'");
		return $hasil;
	}

	function hapus_barang($ID_barang){
		$hasil=$this->db->query("DELETE FROM barang WHERE ID_barang='$ID_barang'");
		return $hasil;
	}
}