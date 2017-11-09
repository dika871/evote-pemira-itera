<?php
include("functions/functions.php");
$koneksi = mysqli_connect("localhost", "root", "1234567890", "pemira2017");
$kandidat = mysqli_query($koneksi, "SELECT nmkandidat FROM kandidat");

$hslkd0 = mysqli_query($koneksi, "UPDATE counter_hasil SET counter =
(select count(*) from voting  where kandidat_id = 0) where id= '0'");
$hslkd1 = mysqli_query($koneksi, "UPDATE counter_hasil SET counter =
(select count(*) from voting  where kandidat_id = 1) where id= '1'");
$hslkd2 = mysqli_query($koneksi, "UPDATE counter_hasil SET counter =
(select count(*) from voting  where kandidat_id = 2) where id= '2'");
$hslkd3 = mysqli_query($koneksi, "UPDATE counter_hasil SET counter =
(select count(*) from voting  where kandidat_id = 3) where id= '3'");
$gatau = mysqli_query($koneksi, "UPDATE counter_hasil SET counter =
(select count(username) from user AS Total_pemilih) - (select count(kandidat_id)
from voting AS Sudah_Memilih) where id=4");
$counter = mysqli_query($koneksi, "select counter from counter_hasil");

$persent1 = mysqli_query($koneksi, "update test1 set kandidat1 = (select TRUNCATE((((select count(kandidat_id) from voting  where kandidat_id = 1) / (select count(kandidat_id) from voting))*100),2)) where id = '1'");
$persent2 = mysqli_query($koneksi, "update test1 set kandidat2 = (select TRUNCATE((((select count(kandidat_id) from voting  where kandidat_id = 2) / (select count(kandidat_id) from voting))*100),2)) where id = '1'");
$persent3 = mysqli_query($koneksi, "update test1 set kandidat3 = (select TRUNCATE((((select count(kandidat_id) from voting  where kandidat_id = 3) / (select count(kandidat_id) from voting))*100),2)) where id = '1'");

$output1 = mysqli_query($koneksi, "SELECT kandidat1 from test1 where id = '1'");
$output2 = mysqli_query($koneksi, "SELECT kandidat2 from test1 where id = '1'");
$output3 = mysqli_query($koneksi, "SELECT kandidat3 from test1 where id = '1'");

//$counter =  mysqli_query($koneksi,"UPDATE counter_hasil SET counter =  (select count(*) from voting  where kandidat_id = 1) where id= '1'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Diagram pemilihan | Pemira2017</title>
</head>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<!--web-fonts-->

</head>

<body>

	<script src="../Chart.js/Chart.bundle.js"></script>
	<style>
		.container {
			width: 80%;
			margin: auto;
		}

		.Logo_KM {
			float: left;
			height: 125px;
			width: 125px;
			margin-left: 15px;
		}

		.Logo_Pemira {
			float: right;
			height: 125px;
			width: 125px;
			margin-right: 15px;
		}
		.persentase {
			border : 1px solid;
			padding: auto;
			margin: auto;
			height: 25px;
			width: 70%;
			text-align: center;
			font-size: 17px;
			background-color: #dfe1e7;
		}
	</style>
	</head>
	<div class="Logo_KM"> <img src="img/Logo_KM.png"> </div>
	<div class="Logo_Pemira"> <img src="img/Logo_pemira.jpg">
	</div>
	<div class="header">
		<h1>Pemira 2017</h1><br>
		<h2>Keluarga Mahasiswa</h2><br>
		<h2>Institut Teknologi Sumatera</h2>
		<br>

		<body>
			<div class="main">
				<div class="main-section">
					<div class="login-section">
						<h2>Hasil Voting Pemira 2017</h2>
						<div class="login-middle">
							<div class="container">
								<canvas id="myChart" width="125" height="125"></canvas>
							</div>
							<script>
								var ctx = document.getElementById( "myChart" );
								var myChart = new Chart( ctx, {
									type: 'bar',
									data: {
										labels: [ <?php while ($b = mysqli_fetch_array($kandidat)) {
    echo '"' . $b['nmkandidat'] . '",';
}?> ], // data  base yang di konekinnya kesini untuk nama kandidat
										datasets: [ {
											label: 'Jumlah ',

											data: [ <?php while ($p = mysqli_fetch_array($counter)) {
    echo '"' . $p['counter'] . '",';
}?> ],
											// data dari hasil votiing di masukkin kesini yang kuran gua ga bisa buat koneksi ke data base sama
											//narik datanya dalam data labels dan data
											backgroundColor: [
												'rgba(102, 0, 204, 1)', //buat setting warna
												'rgba(0, 153, 255, 1)',
												'rgba(0, 255, 204, 1)',
												'rgba(204, 51, 204,1)',
												'rgba(93, 109, 126,1)',
											],
											borderColor: [
												'rgba(255,99,132,1)',
												'rgba(54, 162, 235, 1)',
											],
											borderWidth: 0
										} ]
									},
									options: {
										legend: {
											display: false
										},
										title: {
											display: true,
											text: 'Predicted world population (millions) in 2050'
										}
										/*scales: {
											yAxes: [ {
												ticks: {
													beginAtZero: false
		 										}
											} ]
										}*/
									}
								} );
							</script>
							<p></p>
							<p>
							<div class="persentase">
							<p>
									1. Deni :
									<?php while ($a = mysqli_fetch_array($output1)) {
    echo '' . $a['kandidat1'] . '%';
}?> &nbsp; &nbsp;
									2. Andro :
									<?php while ($c = mysqli_fetch_array($output2)) {
    echo '' . $c['kandidat2'] . '%';
} ?> &nbsp; &nbsp;
									3. Sena :
									<?php while ($e = mysqli_fetch_array($output3)) {
    echo '' . $e['kandidat3'] . '%';
}    ?>
								</p>
							</div>

							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<p>&copy 2017 Departemen Teknokreator. <br> Himpunan Mahasiswa Elektro Informatika <br> Institut Teknologi Sumatera</p>
			</div>
		</body>

</html>
