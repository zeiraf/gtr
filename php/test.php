<html>
<body>

<?php
		
		$hote = 'localhost';
    $base = 'gtr';
    $user = 'gtrusergenius';
    $pass = 'Qgyg4O4vrH56Vrva';
    $cnx = mysql_connect($hote, $user, $pass) or die(mysql_error());
	$ret = mysql_select_db($base) or die(mysql_error());
	//Check connection
	$query = "SELECT * FROM pictures WHERE img_cat = 'GTR-OLD-SCHOOL'";
	$res = mysql_query($query);
	while($row=mysql_fetch_array($res))
{
 echo "<div><img src=\"aff.php?id=".$row['img_id']."\" /></div>";
}
	?>
</body>
</html>