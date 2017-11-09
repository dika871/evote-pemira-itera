
<?php
	$koneksi = mysqli_connect( "localhost", "root", "1234567890", "pemira2017" );
	$kandidat = mysqli_query( $koneksi, "SELECT nmkandidat FROM kandidat" );

	$hslkd0 = mysqli_query( $koneksi, "SELECT COUNT(kandidat_id) AS hsl FROM voting WHERE kandidat_id=0" );
	$hslkd1 = mysqli_query( $koneksi, "SELECT COUNT(kandidat_id) AS hsl1 FROM voting WHERE kandidat_id=1" );
	$hslkd2 = mysqli_query( $koneksi, "SELECT COUNT(kandidat_id) AS hsl2 FROM voting WHERE kandidat_id=2" );
	$hslkd3 = mysqli_query( $koneksi, "SELECT COUNT(kandidat_id) AS hsl3 FROM voting WHERE kandidat_id=3" );

	$hsl0 = mysqli_fetch_assoc($hslkd0);
	$hsl1 = mysqli_fetch_assoc($hslkd1);
	$hsl2 = mysqli_fetch_assoc($hslkd2);
	$hsl3 = mysqli_fetch_assoc($hslkd3);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>H A S I L</title>
	<meta name="description" content="The plugin will detect your mouse wheel and swipe gestures to determine which way the page should scroll." />
	<meta name="keywords" content="scroller, jquery one page scroll, onepagescroll, animated scrolling" />
	<meta name="author" content="Author for Tutorial-webdesign.com" />

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery.onepage-scroll.js"></script>
	<link rel="stylesheet" type="text/css" href="css/onepage-scroll.css" />

	<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header>
		<img src="img/Logo_KM.jpg" height = '100' width='100' align="left"/>
		<h1>HASIL PEMIRA 2017
		<img src="img/Logo_pemira.jpg" height = '100' width='100' align="right"/>
		</h1>
	</header>
	<div class="main">

		<section class="page zero">
			<div class="page-container">
				<center><h2>Hasil Voting <br>Permira KM-ITERA<br>
				2017</center></h2>
			</div>
		</section>

		<section class="page one">
			<div class="page-container">
				<h2>TOTAL DATA PEMILIH</h2><br>
				<p>3333<small> PEMILIH</small></p>
				<p>3333<small> PEMILIH DI TPS 1</small></p>
				<p>3333<small> PEMILIH DI TPS 2</small></p>
				<p>3333<small> PEMILIH DI TPS 3</small></p>
				<p>3333<small> PEMILIH DI TPS 4</small></p>
				<p>3333<small> PEMILIH DI TPS 5</small></p>

			</div>
		</section>

		<section class="page two">
			<div class="page-container">
				<h2>TOTAL DATA PEMILIH YANG HADIR</h2>
				<p>3333<small> PEMILIH</small></p>
				<p>3333<small> PEMILIH DI TPS 1</small></p>
				<p>3333<small> PEMILIH DI TPS 2</small></p>
				<p>3333<small> PEMILIH DI TPS 3</small></p>
				<p>3333<small> PEMILIH DI TPS 4</small></p>
				<p>3333<small> PEMILIH DI TPS 5</small></p>

			</div>
		</section>

		<section class="page three">
			<div class="page-container">
				<h2>TOTAL DATA PEMILIH YANG TIDAK HADIR</h2>
				<p>3333<small> PEMILIH</small></p>
				<p>3333<small> PEMILIH DI TPS 1</small></p>
				<p>3333<small> PEMILIH DI TPS 2</small></p>
				<p>3333<small> PEMILIH DI TPS 3</small></p>
				<p>3333<small> PEMILIH DI TPS 4</small></p>
				<p>3333<small> PEMILIH DI TPS 5</small></p>

			</div>
		</section>

		<section class="page four">
			<div class="page-container">
				<h2>HASIL VOTING<br>TPS 1</h2>
				<p>1. DENNY :
				<?php
				echo $hsl1['hsl1'];
				?>
				SUARA<br>2. ANDRO : <?php
				echo $hsl2['hsl2'];
				?>
				SUARA<br>3. SENA : <?php
				echo $hsl3['hsl3'];
				?>
				SUARA</p>
			</div>
		</section>

		<section class="page five">
			<div class="page-container">
				<h2>HASIL VOTING<br>TPS 2</h2>
				<p>1. DENNY : 0000<br>2. ANDRO : 0000<br>3. SENA : 0000</p>
			</div>
		</section>

		<section class="page six">
			<div class="page-container">
				<h2>HASIL VOTING<br>TPS 3</h2>
				<p>1. DENNY : 0000<br>2. ANDRO : 0000<br>3. SENA : 0000</p>
			</div>
		</section>

		<section class="page seven">
			<div class="page-container">
				<h2>HASIL VOTING<br>TPS 4</h2>
				<p>1. DENNY : 0000<br>2. ANDRO : 0000<br>3. SENA : 0000</p>
			</div>
		</section>

		<section class="page eight">
			<div class="page-container">
				<h2>HASIL VOTING<br>TPS 5</h2>
				<p>1. DENNY : 0000<br>2. ANDRO : 0000<br>3. SENA : 0000</p>
			</div>
		</section>

		<section class="page nine">
			<div class="page-container">
				<h2>HASIL VOTING<br>SELURUH TPS</h2>
				<p>1. DENNY : 0000<br>2. ANDRO : 0000<br>3. SENA : 0000</p>
			</div>
		</section>

		<section class="page ten">
			<div class="page-container">
				<h2>HASIL KANDIDAT TERPILIH</h2><br><br>
				<img src="img/user.png" width="200" height="200" align="middle" />
				<p align="middle">ARI BAMBANG KURNIAWAN</p>
			</div>
		</section>

	</div>

	<script type="text/javascript">
	$(".main").onepage_scroll({
		sectionContainer: "section",
	});
	</script>

</body>
</html>
