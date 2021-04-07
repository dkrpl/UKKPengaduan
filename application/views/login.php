<!DOCTYPE html>
<html>

<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/'; ?>css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="<?php echo base_url() . 'assets/'; ?>img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url() . 'assets/'; ?>img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post" action="<?php echo base_url('index.php/login/cek') ?>">
				<img src="<?php echo base_url() . 'assets/'; ?>img/avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" name="username" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" name="password" class="input">
					</div>
				</div>

				<input type="submit" class="btn" value="Login">

				<a class="text-center" href="<?php echo base_url(); ?>login/register">
					<center>
						<h6>Belum Punya Akun? Klik Disini Untuk Daftar</h6>
					</center>
				</a>


			</form>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/'; ?>js/main.js"></script>
</body>

</html>