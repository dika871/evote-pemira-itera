<?php
  session_start();
  include("functions/functions.php");
 ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Panitia | Pemira KM ITERA</title>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<head>
<style>
table {
    border-collapse: collapse;
    width: 70%;
	margin: 0 auto 10px auto;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
</head>

	<div class="header">
			<h1>Panitia Pemira 2017</h1><br>
      <h2>Keluarga Mahasiswa</h2><br>
      <h2>Institut Teknologi Sumatera</h2>

<body>

			<div class="main">
				<div class="main-section">
					<div class="login-section">
						<h2>Daftar Pemilih Tetap</h2>
                        <form action="" method="post">
                        <input type="search" name="nim" placeholder="nim" style=" margin: 10px 0 10px 0; ">
                        <input type="submit" name ="cari" value="cari">

                        </form>
                        <table>
  							<tr>
							    <th>Username</th>
							    <th>Nama</th>
							    <th>Password</th>
							</tr>
                            <?php
							search();
						?>
                        </table>
                        <br>

                   </div>
               	</div>
             </div>
		<div class="footer">
			<p>&copy 2017 Departemen Teknokreator. <br> Himpunan Mahasiswa Elektro Informatika <br> Institut Teknologi Sumatera</p>
		</div>
</body>
</html>
