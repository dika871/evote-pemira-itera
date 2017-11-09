<?php

include("../functions/functions.php");

 $prodi = $_REQUEST['prodi'];
 $angkatan = $_REQUEST['angkatan'];
 $retArr = array();
 $no = 1;

 $qry = mysqli_query($db, "SELECT nim,nama,prodi,angkatan,DATE_FORMAT(lastlogin, '%d-%m-%Y %H:%i') as lastlogin FROM absensi where prodi='$prodi' and angkatan='$angkatan' order by nim ASC");
 while ($item = mysqli_fetch_array($qry)){
  $id = $no - 1;

  $retArr[$id] = $item;
  $retArr[$id]['no'] = $no;

  $no++;
 }
 echo json_encode($retArr);
?>
