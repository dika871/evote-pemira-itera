<?php
  $db =  mysqli_connect("localhost", "root", "", "pemira2017");

  function getIPAddr()
  {
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
          $ip=$_SERVER['REMOTE_ADDR'];
      }
      return $ip;
  }

  function login()
  {
    if (isset($_POST['login'])) {
        global $db;
        $get_ip = getIPAddr();
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if ($password == "" OR $username == "") {
          echo "<script>alert('User belum terdaftar')</script>";
        }
        else {



        $sql_login = "select * from usertps1 where username='$username' and password='$password'";//ganti pertps
        $run_sql_login = mysqli_query($db, $sql_login);
        $check_user = mysqli_num_rows($run_sql_login);
        

        $sql_cek = "select username from tps1 where username='$username'";
        $run_cek = mysqli_query($db, $sql_cek);
        while ($record=mysqli_fetch_array($run_cek)) {
            $cekuser = $record['username'];
        }


        if ($check_user==0) {
            echo "<script>alert('Username atau password salah')</script>";
            exit();
        }else {

          if ($cekuser=='') {

            $_SESSION['username']=$username;
            echo "<script>window.open('voting.php','_self')</script>";

          }else {

            echo "<script>alert('Anda sudah melakukan voting kandidat')</script>";
            exit();

          }
        }
    }
  }
  }


  function voting(){
    if (isset($_POST['vote'])) {
      global $db;
      $username = $_SESSION['username'];
      $kandidat_id = $_POST['kandidat'];
      $vote_sql = "insert into tps1(username,kandidat_id) values ('$username','$kandidat_id')";//voting di ganti ke tps1-n
      $run_vote = mysqli_query($db, $vote_sql);
      echo "<script>alert('Terima kasih telah vote,')</script>";
      echo "<script>window.open('logout.php','_self')</script>";
    }
  }

  function loginpanitia()
  {
    if (isset($_POST['login'])) {
        global $db;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql_login = "select * from panitia where username='$username' and password='$password'";
        $run_sql_login = mysqli_query($db, $sql_login);
        $check_user = mysqli_num_rows($run_sql_login);
        $_SESSION['panitia']=$username;
		if ($check_user==0) {
            echo "<script>alert('Username atau password salah')</script>";
            exit();}
		echo "<script>window.open('main.php','_self')</script>";

	}
  }

  function countpresensi(){
    global $db;
    $sql = "select count(*) as jumlah from absensi";
    $run = mysqli_query($db,$sql);
    while ($record=mysqli_fetch_array($run)) {
        $jumlah = $record['jumlah'];
    }
    echo "$jumlah";
  }
 function countvoter(){
    global $db;
    $sql = "select count(*) as jumlah from usertps1"; //ganti pertps
    $run = mysqli_query($db,$sql);
    while ($record=mysqli_fetch_array($run)) {
        $jumlah = $record['jumlah'];
    }
    echo "$jumlah";
  }
  
  function countvote(){
    global $db;
    $sql = "select count(*) as jumlah from tps1"; //ganti pertps
    $run = mysqli_query($db,$sql);
    while ($record=mysqli_fetch_array($run)) {
        $jumlah = $record['jumlah'];
    }
    echo "$jumlah";
  }

	function search()
  	{
		if (isset($_POST['cari'])) {
			global $db;
			$username = $_POST['nim'];
      $random = mt_rand(1000,999999);
      $tulispass =  "$random";
      $tulispass1 = md5($tulispass);
      $mskpasswd = "update usertps1 set password='$tulispass1' where username='$username'"; //ganti pertps 1
      $runmp = mysqli_query($db,$mskpasswd);

	  $sql = "select * from usertps1 where username='$username'";
      $hasil= mysqli_query($db,$sql);
		
		//$sql = "SELECT usertps1.username , usertps1.nama, usertps1.prodi , usertps1.angkatan FROM usertps1 NATURAL JOIN tps1";
		//$hasil = mysqli_query($db,$sql);

			while ($data = mysqli_fetch_array ($hasil)){
				echo "
    			<tr>
          <td>".$data['nama']."</td>
          <td>".$data['username']."</td>
					<td>".$tulispass."</td>

				</tr>
										";
					}

				}
  }
  function re_vote(){
	  if(isset($_POST ['revote'])){
		  global $db;
		  $username=$_POST['nim'];
		  $delete = "DELETE FROM tps1 WHERE username = '$username'";
		  $sql_cek = "select username from tps1 where username='$username'";
		  $run_cek = mysqli_query($db, $sql_cek);
		  $run_cek_baris = mysqli_num_rows($run_cek);
		  if($run_cek_baris == 0){
			  echo "<script>alert('ANDA BELUM MELAKUKAN VOTE')</script>";		 
		 }
		 else {
		  echo $konfrim = "<script>confirm('Yakin ingin Re-Vote?')</script>";
		  if ($konfrim) {
				mysqli_query($db,$delete);
			} else {
				// Do nothing!
			}
		 }
	  }
  }

?>
