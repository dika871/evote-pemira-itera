<?php
  $db =  mysqli_connect("localhost", "root", "", "pemira2017");
if (isset($_POST['Tampil'])) {
			global $db;
			$angkatan = $_POST['angkatan'];
			$prodi = $_POST['prodi'];
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