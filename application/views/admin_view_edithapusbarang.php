<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard Admin | Stok Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<!-- Jquery DataTables -->
	<script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<!-- Bootstrap dataTables Javascript -->
	<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- Panggil Fungsi -->
	<script type="text/javascript" charset="utf-8">
	    $(document).ready(function() {
		$('.table-paginate').dataTable();
	 } );
	</script>
	<style>
		body {
			font-size: 12px;
		}
		h1 {
			font-size: 1.8vw;
			line-height: 125%;
		}
		h2 {
			font-size: 1.125vw;
			line-height: 150%;
			color: #e2e2e2;
		}
		.sidenav {
			position: fixed;
			z-index: 1;
			left: 0;
			top: 0;
			width: 17.5%;
			height: 100%;
			background-color: #222831;
			color: white;
			padding: 2.5% 0%;
			overflow-x: hidden;
		}
		.sidenav .nav-info {
			padding: 0 10%;
		}
		.sidenav .nav-links a {
			display: block;
			text-align: left;
			width: 100%;
			font-size: 1vw;
			padding: 5% 2%;
			color: #d0d0d0;
			border-radius: 0;
		}
		.sidenav .nav-links a:hover {
			background-color: #30475E;
			color: white;
		}
		#btn-active {
			background-color: #30475E;
			color: white;
		}
		hr {
			border-top: 2px solid #ACACAC;
			margin: 20% 0 10% 0;
		}
		.tabelstok {
			position: absolute;
			right: 0;
			top: 0;
			width: 82.5%;
			height: 100%;
			color: #222831;
			background-color: #F6FEFF;
			padding: 2.5% 1%;
			font-size: 1.25rem;
		}
		td {
			color: #606060;
		}
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		  -webkit-appearance: none;
		  margin: 0;
		}

		/* Firefox */
		input[type=number] {
		  -moz-appearance: textfield;
		}
		.dataTables_info {
			color: blue;
		}
		#DataTables_Table_0_filter label {
			position: relative;
			float: right;
		}
		#DataTables_Table_0_wrapper .row:first-child {
			margin-bottom: 2%;
		}
		#DataTables_Table_0_info {
			color: #222831;
		}
		#DataTables_Table_0_paginate {
			color: #222831;
		}
		.btn-logout {
			margin: 0;
			padding: 0;
			color: white;
			border: 1px solid white;
			border-radius: 6px;
			padding: 1rem 2rem;
			font-size: 0.8vw;
		}
		.btn-logout:hover {
			background-color: #30475E;
			color: white;
		}
		.btn-modal {
			color: white;
			background-color: #222831;
		}
		.btn-modal:hover {
			background-color: #30475E;
			color: white;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="sidenav">
			<div class="nav-info">
				<h1><?php echo $this->session->userdata['nama_pegawai']; ?></h1>
	            <h2><?php echo "username : ".$this->session->userdata['username']; ?></h2><br>
	            <a href="<?php echo site_url('Login/logout');?>" class="btn btn-logout" role="button">Log Out</a>
	        </div><hr>
            <div class="nav-links">
	            <a href="<?php echo site_url('Admin/view_aturstokbarang');?>" class="btn" role="button"><i class="material-icons" style="font-size:24px; transform: translateY(4px); margin-right: 10px;">assignment</i>Atur Stok Barang</a>
	            <a href="<?php echo site_url('Admin/view_tambahbarang');?>" class="btn" role="button"><i class="material-icons" style="font-size:24px; transform: translateY(4px); margin-right: 10px;">add_circle_outline</i>Tambah Data Barang</a>
	            <a href="<?php echo site_url('Admin/view_edithapusbarang');?>" class="btn" id="btn-active" role="button"><i class="material-icons" style="font-size:24px; transform: translateY(4px); margin-right: 10px;">find_replace</i>Ubah/Hapus Data Barang</a>
        	</div>
		</div>
		<div class="tabelstok">
		<center>
			<h1>Ubah atau Hapus Barang pada Inventori</h1><br><br>
		</center>
			<table class="table table-bordered table-paginate" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Barang</th>
						<th>Nama Barang</th>
						<th>Jenis Barang</th>
						<th>Harga Barang</th>
						<th>Ubah Data</th>
						<th>Hapus Barang</th>
					</tr>
				</thead>
				<tbody>
					<?php 
	                    $no = 1;
	    				foreach($data->result_array() as $barang):
	    					$ID_barang=$barang['ID_barang'];
	    					$nama_barang=$barang['nama_barang'];
	    					$jenis_barang=$barang['jenis_barang'];
	    					$harga_barang="Rp " . number_format($barang['harga_barang'],2,',','.');
	    			?>
	    			<tr>
	    				<td><?php echo $no++;?></td>
	    				<td><?php echo $ID_barang;?></td>
	    				<td><?php echo $nama_barang;?></td>
	    				<td><?php echo $jenis_barang;?></td>
	    				<td><?php echo $harga_barang;?></td>
	    				<td>
                            <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_ubah_barang<?php echo $ID_barang;?>"><span class="glyphicon glyphicon-pencil" style="margin-right: 4px;"></span>Ubah</a>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus_barang<?php echo $ID_barang;?>"><span class="glyphicon glyphicon-trash" style="margin-right: 4px;"></span>Hapus</a>
                        </td>
	    			</tr>
	    			<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- ============ MODAL EDIT BARANG =============== -->
	<?php 
        foreach($data->result_array() as $barang):
			$ID_barang=$barang['ID_barang'];
			$nama_barang=$barang['nama_barang'];
			$jenis_barang=$barang['jenis_barang'];
			$harga_barang=$barang['harga_barang'];
	?>

    <div class="modal fade" id="modal_ubah_barang<?php echo $ID_barang;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title">Ubah Detail Barang</h3>
        </div>
        <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/ubah_barang');?>">
            <div class="modal-body">
            	<div class="form-group">
                    <div class="col-xs-8">
                        <input name="ID_barang" value="<?php echo $ID_barang;?>" class="form-control" type="hidden">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Nama Barang</label>
                    <div class="col-xs-8">
                        <input name="nama_barang" value="<?php echo $nama_barang;?>" class="form-control" type="text" placeholder="Masukkan nama barang">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Jenis Barang</label>
                    <div class="col-xs-8">
                        <input name="jenis_barang" value="<?php echo $jenis_barang;?>" class="form-control" type="text" placeholder="Masukkan jenis barang">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Harga Barang</label>
                    <div class="col-xs-8">
                        <input name="harga_barang" value="<?php echo $harga_barang;?>" class="form-control" type="text" placeholder="Masukkan harga barang">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-modal">Simpan perubahan</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    <?php endforeach;?>

    <!-- ============ MODAL JUMLAH KELUAR =============== -->
	<?php 
        foreach($data->result_array() as $barang):
			$ID_barang=$barang['ID_barang'];
			$nama_barang=$barang['nama_barang'];
	?>

    <div class="modal fade" id="modal_hapus_barang<?php echo $ID_barang;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title">Konfirmasi Hapus Data Barang</h3>
        </div>
        <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/hapus_barang');?>">
            <div class="modal-body">
            	<p>Anda yakin hendak menghapus <b><?php echo $nama_barang;?><span>?</span></b></p>
            	<div class="form-group">
                    <div class="col-xs-8">
                        <input name="ID_barang" value="<?php echo $ID_barang;?>" class="form-control" type="hidden">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-modal">Hapus</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    <?php endforeach;?>
</body>
</html>