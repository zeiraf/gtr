<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
      <?php
         include ("connexion.php");
         $req = "SELECT img_name, img_id " .
                "FROM pictures ORDER BY img_name";
         $ret = mysql_query ($req) or die (mysql_error ());
         while ( $col = mysql_fetch_row ($ret) )
         {
             echo "<a href=\"aff.php?id=" . $col[1] . "\">" . $col[0] . "</a><br />";
         }
      ?>
   </body>
</html>