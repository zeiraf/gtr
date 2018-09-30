<?php
    $hote = 'localhost';
    $base = 'gtr';
    $user = 'gtrusergenius';
    $pass = 'Qgyg4O4vrH56Vrva';
    $cnx = mysql_connect($hote, $user, $pass) or die(mysql_error());
	$ret = mysql_select_db($base) or die(mysql_error());
	//Check connection

?>