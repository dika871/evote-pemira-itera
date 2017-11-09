<?php
  session_start();
  include("../functions/functions.php");

  if (!isset($_SESSION['panitia'])) {
    echo "<center>Your session has invalid (timeout). Please <a href='index.php' target='_top'>Login</a> again.</center>";
  }
  else {
    echo "<html>\n";
    echo "<head>\n";
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
    echo "<title>Login Panitia | Pemira KM ITERA</title>\n";
    echo "<link href=\"../css/style1.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>\n";
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">\n";
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n";
    echo "<meta name=\"keywords\" content=\"Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />\n";
    echo "<!--web-fonts-->\n";
    echo "<head>\n";
    echo "<style>\n";
    echo "table {\n";
    echo "    border-collapse: collapse;\n";
    echo "    width: 70%;\n";
    echo "	margin: 0 auto 10px auto;\n";
    echo "}\n";
    echo "\n";
    echo "th, td {\n";
    echo "    text-align: center;\n";
    echo "    padding: 8px;\n";
    echo "}\n";
    echo "\n";
    echo "tr:nth-child(even){background-color: #f2f2f2}\n";
    echo "\n";
    echo "th {\n";
    echo "    background-color: #4CAF50;\n";
    echo "    color: white;\n";
    echo "}\n";
    echo "</style>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "</head>\n";
    echo "\n";
    echo "<body>\n";
    echo "\n";
    echo "			<div class=\"main\">\n";
    echo "				<div class=\"main-section\">\n";
    echo "					<div class=\"login-section\">\n";
    echo "						<h2>Daftar Pemilih Tetap</h2>\n";
    echo "                        <br>\n";
    echo "                        <form action=\"\" method=\"post\">\n";
    echo "                        <input type=\"search\" name=\"nim\" placeholder=\"nim\" style=\" margin: 10px 0 10px 0; \">\n";
    echo "                        <input type=\"submit\" name =\"cari\" value=\"cari\">\n";
	echo "						  <input type=\"submit\" name =\"revote\" value=\"revote\">\n";
    echo "\n";
    echo "                        </form>\n";
    echo "                        <br>\n";
    echo "                        <table>\n";
    echo "  							<tr>\n";
    echo "							    <th>Nama</th>\n";
    echo "							    <th>Username</th>\n";
    echo "							    <th>Password</th>\n";
    echo "							</tr>\n";

    							search();
								re_vote();

    echo "                        </table>\n";
    echo "                        <br>\n";
    echo "\n";
    echo "                   </div>\n";
    echo "               	</div>\n";
    echo "             </div>\n";
    echo "		<div class=\"footer\">\n";
    echo "			</div>\n";
    echo "</body>\n";
    echo "</html>\n";  }
 ?>
