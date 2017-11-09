<?php
  $db =  mysqli_connect("localhost", "root", "", "pemira2017");
	$angkatan = $_POST['angkatan'];
	$prodi = $_POST['prodi'];
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
        $password = $_POST['password'];

        $sql_login = "select * from user where username='$username' and password='$password'";
        $run_sql_login = mysqli_query($db, $sql_login);
        $check_user = mysqli_num_rows($run_sql_login);

        $sql_cek = "select kandidat_id from voting where username='$username'";
        $run_cek = mysqli_query($db, $sql_cek);
        while ($record=mysqli_fetch_array($run_cek)) {
            $cekkandidat = $record['kandidat_id'];
        }


        if ($check_user==0) {
            echo "<script>alert('Username atau password salah')</script>";
            exit();
        }else {

          if ($cekkandidat=='') {

            $update_ip = "update user set ip_add='$get_ip',lastlogin=NOW() where username='$username'";
            $run_update = mysqli_query($db, $update_ip);
            $_SESSION['username']=$username;
            echo "<script>window.open('voting.php','_self')</script>";

          }else {

            echo "<script>alert('Anda sudah melakukan voting kandidat')</script>";
            exit();

          }
        }
    }
  }


  function voting(){
    if (isset($_POST['vote'])) {
      global $db;
      $username = $_SESSION['username'];
      $kandidat_id = $_POST['kandidat'];
      $vote_sql = "insert into voting (username,kandidat_id) values ('$username','$kandidat_id')";
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
		if ($check_user==0) {
            echo "<script>alert('Username atau password salah')</script>";
            exit();}
		$_SESSION['username']=$username;
		echo "<script>window.open('search.php','_self')</script>";

	}
  }
	function search()
  	{
		if (isset($_POST['cari'])) {
			global $db;
			$username = $_POST['nim'];
			$sql = "select * from user where username='$username'";
    		$hasil=mysqli_query ($db,$sql);
			
			while ($data = mysqli_fetch_array ($hasil)){
				//$id = $data['username'];
				echo "    
    			<tr>
			    	<td>".$data['username']."</td>
			    	<td>".$data['nama']."</td>
					<td>".$data['password']."</td>
        
				</tr> 
										";
					}
				
				} 
  }
	function Tampil()
  	{
		if (isset($_POST['Tampil'])) {
			global $db;
			global $angkatan;
			global $prodi;
			$sql = "select * from user where angkatan='$angkatan'and prodi='$prodi'";
    		$hasil=mysqli_query ($db,$sql);
			
			while ($data = mysqli_fetch_array ($hasil)){
				//$id = $data['username'];
				echo "
				<tr>
     				<td >".$data['username']."</th>
  					<td >".$data['nama']."</th>
  					<td >".$data['prodi']."</th>
  					<td >".$data['angkatan']."</th>
     			</tr>
										";
					}
				
				}
		
  }
	function printah(){
		
			global $db;
			global $angkatan;
			global $prodi;
			$sql = "select * from user where angkatan='$angkatan'and prodi='$prodi'";
    		$hasil=mysqli_query ($db,$sql);
			
			while ($data = mysqli_fetch_array ($hasil)){
				//$id = $data['username'];
				echo "
				<tr>
     				<td >".$data['username']."</th>
  					<td >".$data['nama']."</th>
  					<td >".$data['prodi']."</th>
  					<td >".$data['angkatan']."</th>
     			</tr>
										";
					}
				
				}

	function pindah (){
		if (isset($_POST['Print'])) {
			echo"<script>window.open('print.php','_self')</script>";
		}
		
	}
?>
