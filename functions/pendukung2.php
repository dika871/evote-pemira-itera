<?php 
$koneksi = mysqli_connect( "localhost", "root", "", "pemira2017" );
$IF = mysqli_query($koneksi,"UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Informatika') where id = 'Teknik Informatika'");

$EL = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Elektro') where id = 'Teknik Elektro'");

$FI = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'FISIKA') where id = 'FISIKA'");

$GT = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Geomatika') where id = 'Teknik Geomatika'");

$PWK = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Perencanaan Wilayah dan Kota')where id = 'Perencanaan Wilayah dan Kota'");

$TG = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Geofisika') where id = 'Teknik Geofisika'");

$SI = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Sipil') where id = 'Teknik Sipil'");

$TL = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Lingkungan') where id = 'Teknik Lingkungan'");

$Geo = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Informatika') where id = 'Teknik Informatika'");

$ar = mysqli_query($koneksi, "UPDATE counter_pendukung2 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 2 and prodi = 'Teknik Geologi') where id = 'Teknik Geologi'");
	
$test1 = mysqli_query($koneksi,"select id from counter_pendukung2");
$test2 = mysqli_query($koneksi,"select counter from counter_pendukung2");
?>