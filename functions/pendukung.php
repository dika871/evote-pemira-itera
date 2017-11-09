<?php 
$koneksi = mysqli_connect( "localhost", "root", "", "pemira2017" );
$IF = mysqli_query($koneksi,"UPDATE counter_pendukung1 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 1 and prodi = 'Teknik Informatika') where id = 'Teknik Informatika'");

$EL = mysqli_query($koneksi, "UPDATE counter_pendukung1 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 1 and prodi = 'Teknik Elektro') where id = 'Teknik Elektro'");

$FI = mysqli_query($koneksi, "UPDATE counter_pendukung1 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 1 and prodi = 'FISIKA') where id = 'FISIKA'");

$GT = mysqli_query($koneksi, "UPDATE counter_pendukung1 SET counter =
(select count(prodi) from user inner join voting ON voting.username = user.username
where kandidat_id = 1 and prodi = 'Teknik Geomatika') where id = 'Teknik Geomatika'");



	
$test1 = mysqli_query($koneksi,"select id from counter_pendukung1");
$test2 = mysqli_query($koneksi,"select counter from counter_pendukung1");
?>