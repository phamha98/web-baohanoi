<?php session_start(); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Đăng nhập vào hệ thống tin tức</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<style>
		body {
			background: rgb(235, 229, 177);
		}

		.container {
			width: 700px;
			height: 500px;
			background-color: rgba(5, 255, 234, 0.267);
			margin: auto;
			padding: 10px;
			margin-top: 30px;
			position: relative;
			border-radius: 5px;
			transition: 2s;
		}

		.container:hover {
			background-color: rgba(5, 255, 234, 0.931);
		}

		.marquee1 {
			width: 400px;
			height: 40px;
			color: #00f;
			background: #ccff33;
			text-align: center;
			line-height: 40px;
			border-radius: 5px;
			margin: auto;
			position: absolute;
			top: 35px;
			left: 160px;
			transition: 2s;
			font-size: 15px;
		}

		.font1 {
			color: rgb(32, 126, 3);
			font-size: 30px;
		}

		.content {
			margin: auto;
			width: 400px;
			height: 350px;
			background: #ecfaf0;
			margin-top: 80px;
			text-align: center;
			border-radius: 10px;
			font-family: Tahoma, Geneva, sans-serif;
			transition: 2s;
		}

		.content:hover {
			margin: auto;
			width: 400px;
			height: 350px;
			background: #00e6455d;
			margin-top: 80px;
			text-align: center;
			border-radius: 10px;
			transition: 2s;
			font-family: Tahoma, Geneva, sans-serif;
		}

		#input {
			width: 170px;
			height: 40px;
			background: #6ff;
			color: rgb(0, 0, 0);
			border: none;
			margin-top: 10px;
			padding-left: 20px;
			border-radius: 5px;
		}

		#input:hover {
			width: 170px;
			height: 40px;
			background: #ff0;
			border-radius: 5px;
			border-color: #ff0;
			color: rgb(0, 0, 0);
			border: none;
			margin: 5px;
			transition: 0.5s;
			padding-left: 20px;
		}

		.forgot-register {
			width: 100%;
			height: 40px;
			line-height: 40px;
			margin-top: 5px;
			color: red;
		}

		.forgot {
			float: left;
			padding-left: 100px;
		}

		.register {
			float: right;
			padding-right: 100px;
		}

		#input-login {
			width: 190px;
			height: 40px;
			border-radius: 5px;
			background: rgb(0, 255, 255);
			border: none;
			text-align: center;
			padding: inherit;
			color: #03f;
			margin-top: 10px;
		}

		#input-login:hover {
			background: rgb(0, 174, 255);

			transition: 0.5s;
		}

		a {
			text-decoration: none;
			font-size: 14px;
		}

		.view-imglogo {
			width: 100%;
			background: #00e646;
			border-radius: 10px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="marquee1">
			<marquee width="100%" direction="left" behavior="alternate">Chào mừng bạn đến với <span style="color:#F0F">báo của tui</span> welcome welcome</marquee>
		</div>
		<div class="content">
			<div class="view-imglogo">
				<img src="../../image/google-b.jpg" alt='google' width="300">
			</div>
			<form method="POST" >
				<input id="input" type="email" name="email" placeholder="Nhập email của bạn vào!"></br>
				<input id="input" type="text" name="pass" placeholder="Nhập mật khẩu của bạn vào!"></br>
				<div class="forgot-register">
					<div class="forgot">
						<a href="https://www.youtube.com/">Quên mật khẩu?</a></br>
					</div>
					<div class="register">
						<a href="dangky.php">Tạo tài khoản?</a>
					</div>
				</div>
				<input id="input-login" type="submit" name="dangnhap" value="Đăng nhập"></br>
			</form>
			<?php
			##
			include('../../function/dieukhien.php');
			if (isset($_POST['dangnhap'])) {
				$email = $_POST['email'];
				$_SESSION['email'] = $email;
				$pass = $_POST['pass'];
				$taikhoan = new taikhoan();
				$tim_email = $taikhoan->tim_email($email);
				$tim_pass = $taikhoan->tim_pass($email, $pass);
				if (empty($email) || empty($pass))
					echo "<script>alert('Bạn chưa nhập dữ liệu')</script>";
				else {
					if ($tim_email == 0) echo "<script>alert('Bạn Nhập Sai Email!')</script>";
					else {
						if ($tim_pass == 0) echo "<script>alert('Bạn Nhập sai mật khẩu!')</script>";
						else {
							echo "<script>alert('Đăng nhập thành công!')</script>";
							header('location:../Person');
						}
					}
				}
			}

			?>
		</div>
	</div>
</body>

</html>