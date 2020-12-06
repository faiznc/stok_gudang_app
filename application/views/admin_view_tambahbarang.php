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
        .form-tambah {
            position: absolute;
            right: 0;
            top: 0;
            width: 82.5%;
            height: 100%;
            color: #222831;
            background-color: #F6FEFF;
            padding: 2.5% 1%;
            font-size: 1.6rem;
        }
        form {
            padding: 0 6%;
        }
        .form-group {
            margin-bottom: 1.2vw;
        }
        .form-tambah .form-group input {
            width: 100%;
            height: 4.8rem;
        }
        .btn-tambah {
            margin-top: 0.4%;
            color: #F6FEFF;
            width: 12%;
            height: 2.8vw;
            background-color: #222831;
        }
        .btn-tambah:hover {
            background-color: #30475E;
            color: white;
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
                <a href="<?php echo site_url('Admin/view_tambahbarang');?>" class="btn" id="btn-active" role="button"><i class="material-icons" style="font-size:24px; transform: translateY(4px); margin-right: 10px;">add_circle_outline</i>Tambah Data Barang</a>
                <a href="<?php echo site_url('Admin/view_edithapusbarang');?>" class="btn" role="button"><i class="material-icons" style="font-size:24px; transform: translateY(4px); margin-right: 10px;">find_replace</i>Ubah/Hapus Data Barang</a>
            </div>
        </div>
        <div class="form-tambah">
		<center>
            <h1>Tambahkan Barang Baru ke Inventori</h1><br><br>
			</center>
            <form method="post" action="<?php echo site_url('Admin/tambah_barang');?>">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama_barang" class="form-control" type="text" placeholder="Masukkan Nama Barang" required oninvalid="this.setCustomValidity('Masukkan nama barang')"
    oninput="this.setCustomValidity('')">
                </div>

                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input name="jenis_barang" class="form-control" type="text" placeholder="Masukkan Jenis Barang" required oninvalid="this.setCustomValidity('Masukkan jenis barang')"
    oninput="this.setCustomValidity('')">
                </div>

                <div class="form-group">
                    <label>Harga Barang</label>
                    <input name="harga_barang" class="form-control" type="number" placeholder="Masukkan Harga Barang" required oninvalid="this.setCustomValidity('Masukkan harga barang')"
    oninput="this.setCustomValidity('')">
                </div>

                <div class="form-group">
                    <label>Jumlah Stok Barang</label>
                    <input name="stok_barang" class="form-control" type="number" placeholder="Masukkan Stok Barang">
                </div>
                <button type="submit" class="btn btn-tambah">Tambahkan</button>
            </form>
        </div>
    </div>
</body>
</html>