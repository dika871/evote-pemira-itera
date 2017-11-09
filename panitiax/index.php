<?php
  session_start();
  include("../functions/functions.php");
 ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Panitia | Pemira KM ITERA</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<style>
		img {
    		border-radius: 5px;
			z-index:3;
		}
		label > input{ /* HIDE RADIO */
  			visibility: hidden; /* Makes input not-clickable */
  			position: absolute; /* Remove input from document flow */
		}
		label > input + img{ /* IMAGE STYLES */
  			cursor:pointer;
  			border:5px solid transparent;
  			-webkit-transition-duration: 0.4s; /* Safari */
		}
		label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  		border:5px solid #4CAF50;
		}
		ab{
  			//background-color:#898E8C ;
  			color:#ffffff;
  			font-size:20px;
			text-align:center;
			//margin-right: 175;
		}
		.Logo_KM{
			float: left;
			height: 125;
			width: 125;
			margin-left: 15;
		}
		.Logo_Pemira{
			float: right;
			height: 125;
			width: 125;
			margin-right: 15;
		}
	</style>
</head>
<body>

		<!---header--->
    <div class="Logo_KM"> <img src="../img/Logo_KM.png"></div>
    <div class="Logo_Pemira"> <img src="../img/Logo_pemira.jpg"></div>
    <div class="header">
			<h1>Panitia Pemira 2017</h1><br>
      <h2>Keluarga Mahasiswa</h2><br>
      <h2>Institut Teknologi </h2>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section">
					<div class="login-section">
						<form action="" method="post">
						<h2>Login Panitia</h2>
						<div class="login-middle">
							<p>Login dengan user dan password anda</p>

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
			<div class="footer">
			<p>&copy 2017 Departemen Teknokreator HMEI <br>Institut Teknologi Sumatera</p>
		</div>
    <?php
        loginpanitia();
     ?>
		<!---main--->
			</body>
</html>
