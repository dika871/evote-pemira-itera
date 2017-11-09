<?php
$tambah = fopen($tempatfile, 'w');
fwrite($tambah, ob_get_contents());
fclose($tambah);
ob_end_flush();
?>