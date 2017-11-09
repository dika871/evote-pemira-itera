<?php


    session_start();
    include("functions/functions.php");
    if (!isset($_SESSION['username'])) {
        echo "<script>window.open('index.php','_self')</script>";
        ;
    } else {
        echo "";
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Session</title>
</head>

<style>
		label > input{ /* HIDE RADIO */
  			visibility: hidden; /* Makes input not-clickable */
  			position: absolute; /* Remove input from document flow */
		}
</style>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->



<body>
	<form action="" method="post">
	<label>
  		<input name="kandidat" value="0" >
        <input type="submit" name="vote" value="vote" id="vote">

    </label>
	</form>
	<script type="text/javascript">
	document.getElementsByTagName('input').checked=true;
	document.getElementById('vote').click();
	<?php voting();
    ?>
	</script>
</body>
</html>
