<?php
  session_start();
  include("functions/functions.php");
 ?>

<html>
<head>
<!--<meta http-equiv="refresh" content="40">-->
<!-- untuk refresh otomatis-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login | Pemira KM ITERA</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<style>
	.Logo_KM{
			float: left;
			height: 125px;
			width: 125px;
			margin-left: 15px;
		}
		.Logo_Pemira{
			float: right;
			height: 125px;
			width: 125px;
			margin-right: 15px;
		}
	</style>
	<body>
		<!---header--->
		<div class="Logo_KM"> <img src="img/Logo_KM.png"></div>
	<div class="Logo_Pemira"> <img src="img/Logo_pemira.jpg"></div>
		<div class="header">
			<h1>Pemira 2017</h1><br>
      <h2>Keluarga Mahasiswa</h2><br>
      <h2>Institut Teknologi Sumatra</h2>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section">
					<div class="login-section">
						<form action="" method="post">
						<h2>Login to Vote</h2>
						<div class="login-middle">
							<p>Log in with your username and password</p>

								<input type="text" name="username" placeholder="Username">
								<input type="password" name="password" placeholder="Password">

						</div>
            <div class="login-bottom">

							<div class="login-center" style="float:center;">

								<input type="submit" name="login" value="Login">

							</div>
						</div>
						</form>

					</div>
				</div>
			</div>
			<script language="javascript">
				document.onkeydown = function(ev) {
  								var key;
  								ev = ev || event;
  								key = ev.keyCode;
  								if (key == 116 || key == 17) {
  								return false;  // disable F5 F11 = 122, Ctrl, alt 18 key
								}
							}
				document.oncontextmenu = function () {
    				return false;
					};
		
			</script>
			<div class="footer">
			<p>&copy 2017 Departemen Teknokreator. <br> Himpunan Mahasiswa Elektro Informatika <br> Institut Teknologi Sumatera</p>
		</div>
    <?php
        login();
     ?>
		<!---main--->
			</body>
</html>
