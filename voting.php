<?php

session_start();
include( "functions/functions.php" );

//$timeout = 60; // Set timeout menit
$logout_redirect_url = "session.php"; // Set logout URL

$timeout = 30; // Ubah menit ke detik
if ( isset( $_SESSION[ 'start_time' ] ) ) {
	$elapsed_time = time() - $_SESSION[ 'start_time' ];
	if ( $elapsed_time >= $timeout ) {

		echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
	}
}
$_SESSION[ 'start_time' ] = time();

if ( !isset( $_SESSION[ 'username' ] ) ) {
	echo "<script>window.open('index.php','_self')</script>";
} else {
	echo "";
}
//else {
//echo "";
//}
include( "functions/top-cache.php" );
?>
<html>

<head>
	<title>Vote | Pemira KM ITERA 2017</title>
</head>
<meta http-equiv="refresh" content="30.6">
<!-- untuk refresh otomatis-->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<!--web-fonts-->

<body>
	<!--script src="_so/js?//stackoverflow.com/questions/17541614/use-thumbnail-image-instead-of-radio-button" id="so"></script-->
	<meta charset=utf-8/>

	<style>
		img {
			border-radius: 5px;
			z-index: 3;
		}
		
		label> input {
			/* HIDE RADIO */
			visibility: hidden;
			/* Makes input not-clickable */
			position: absolute;
			/* Remove input from document flow */
		}
		
		label> input+ img {
			/* IMAGE STYLES */
			cursor: pointer;
			border: 5px solid transparent;
			-webkit-transition-duration: 0.4s;
			/* Safari */
		}
		
		label> input:checked+ img {
			/* (RADIO CHECKED) IMAGE STYLES */
			border: 5px solid #4CAF50;
		}
		
		ab {
			//background-color:#898E8C ;
			color: #ffffff;
			font-size: 20px;
			text-align: center;
			//margin-right: 175;
		}
		
		.Logo_KM {
			float: left;
			height: 125;
			width: 125;
			margin-left: 15;
		}
		
		.Logo_Pemira {
			float: right;
			height: 125;
			width: 125;
			margin-right: 15;
		}
	</style>

	</head>
	<div class="Logo_KM"> <img src="img/Logo_KM.png">
	</div>
	<div class="Logo_Pemira"> <img src="img/Logo_pemira.jpg">
	</div>
	<div class="header">
		<h1>Pemira 2017</h1><br>
		<h2>Keluarga Mahasiswa</h2><br>
		<h2>Institut Teknologi Sumatera</h2>
		<ab>Time Left = <span id="timer"></span> Seconds</ab>
	</div>

	<body>

		<div class="main">
			<div class="main-section" style="width: 50%">
				<div class="login-section">
					<h2>Kandidat</h2>

					<form action="" method="post">
						<label>
                        		<input onclick="document.getElementById('vote').disabled = false;" type="radio" name="kandidat" value="1" >
                        		<img src="img/DeniAwal.jpg" alt="Kandidat1" width="210" height="210" id="imgClickAndChange1" onClick="changeImage1()">
        				</label>
					
						<label>
                        		<input onclick="document.getElementById('vote').disabled = false;" type="radio" name="kandidat" value="2">
                        		<img src="img/SenaAwal.jpg" alt="Kandidat2" width="210" height="210" id="imgClickAndChange2" onClick="changeImage2()" >
                </label>
					
						<!--<label>
                        		<input onclick="document.getElementById('vote').disabled = false;" type="radio" name="kandidat" value="3" >
                        		<img src="img/AndroAwal.JPG" alt="Kandidat3" width="210" height="210" id="imgClickAndChange" onClick="changeImage()" style="margin: 5px 0 0px 0;" >
        				</label> -->
					

						<div class="login-center" style="float:center;" >
							<input type="submit" name="vote" value="vote"  id="vote" style="width: 150px; margin: 2px 0 10px 0; "  disabled="disabled" >
					</div>
					</form>
					
				</div>
				<script language="javascript">
					function changeImage1() {
						document.getElementById( "imgClickAndChange1" ).src = "img/Deniakhir.jpg";
						document.getElementById( "imgClickAndChange2" ).src = "img/SenaAwal.jpg";
					}

					function changeImage2() {
						document.getElementById( "imgClickAndChange1" ).src = "img/DeniAwal.jpg";
						document.getElementById( "imgClickAndChange2" ).src = "img/SenaAkhir.jpg";
					}
					document.getElementById( 'timer' ).innerHTML = 0 + ":" + 30;
					startTimer();

					function startTimer() {
						var presentTime = document.getElementById( 'timer' ).innerHTML;
						var timeArray = presentTime.split( /[:]+/ );
						var m = timeArray[ 0 ];
						var s = checkSecond( ( timeArray[ 1 ] - 1 ) );
						if ( s == 59 ) {
							m = m - 1
						}
						//if(m<0){alert('timer completed')}

						document.getElementById( 'timer' ).innerHTML = m + ":" + s;
						setTimeout( startTimer, 1000 );
					}

					function checkSecond( sec ) {
						if ( sec < 10 && sec >= 0 ) {
							sec = "0" + sec
						}; // add zero in front of numbers < 10
						if ( sec < 0 ) {
							sec = "59"
						};
						return sec;
					}
					document.onkeydown = function (e) {
						return false;
					}
					/*document.onkeydown = function ( ev ) {
						var key;
						ev = ev || event;
						key = ev.keyCode;
						if ( key == 116 || key == 122 || key == 17 || (key == 18 && key == 37)) {
							return false; // disable F5=116, F11=122,ctrl = 17, alt = 18 key
						}
					}*/
					document.oncontextmenu = function () {
							return false;
					}
					setTimeout(function(){ document.getElementById("vote").disabled = true; }, 30000);

				</script>

				<div class="footer">
					<p>&copy 2017 Departemen Teknokreator. <br> Himpunan Mahasiswa Elektro Informatika <br> Institut Teknologi Sumatera</p>
				</div>
			</div>
			<?php
//			include("function/bottom-cache.php");
			voting();
		?>
	</body>

</html>
	
	