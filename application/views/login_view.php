<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Admin | Stok Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		body {
			font-size: 12px;
			color: #222831;
			background-color: #F6FEFF;
		}
		h1 {
			font-size: 6rem;
		}
		h2 {
			font-size: 4rem;
		}
		h3 {
			font-size: 2.5rem;
		}
		::placeholder {
			font-size: 1.5rem;
		}
		.left-landing, .right-landing {
			display: block;
			height: auto;
			position: absolute;
			top: 25%;
		}
		.left-landing {
			left: 10%;
			width: 40%;
			padding: 2.5% 5% 0 0;
		}
		.right-landing {
			right: 25%;
			width: 20%;
			padding: 1% 2.5% 3% 2.5%;
		}
		.btn-login {
			width: 100%;
			height: 5rem;
			background-color: #222831;
			color: white;
			border-radius: 6px;
		}
		.btn-login:hover {
			color: white;
			box-shadow: 0px 0px 10px rgba(150, 83, 36, 0.20);
		}
		.input-lg {
			border: 1px solid #222831;
			border-radius: 6px;
			color: #222831;
		}
		.focus-state:focus {
			border: 1px solid #222831;
			box-shadow: 0px 0px 10px rgba(150, 83, 36, 0.20);
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="left-landing">
			<h1 class="text-right">Stok Gudang</h1><br>
			<h2 class="text-right">Solusi Manajemen Inventori</h2>
		</div>
		<div class="right-landing form-col">
			<h3>Masuk ke Sistem</h3><br><br>
			<form action="<?php echo site_url('Login/auth'); ?>" method="POST">
				<div class="form-group">
					<input type="username" placeholder="Username" class="form-control input-lg focus-state" id="username" name="username" required oninvalid="this.setCustomValidity('Masukkan username anda')"
    oninput="this.setCustomValidity('')">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" class="form-control input-lg focus-state" id="password" name="password" required oninvalid="this.setCustomValidity('Masukkan password anda')"
    oninput="this.setCustomValidity('')">
				</div>

				<button type="submit" class="btn btn-login center-block">Login</button>
			</form>
		</div>
	</div>
</body>
</html>