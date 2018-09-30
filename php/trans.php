<?php
    function transfert(){
        $ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 4294967295 ;
		$img_cat	= $_POST['cat'];
        $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $img_taille = $_FILES['fic']['size'];
            
            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            $img_type = $_FILES['fic']['type'];
            $img_nom  = $_FILES['fic']['name'];
			if($_FILES['image']['type'] != "image/png" || $_FILES['image']['type'] != "image/jpg" ) {
				echo "Only PNG images are allowed!";
				exit;
}
        }
		include ("connexion.php");
        $img_blob = addslashes(file_get_contents ($_FILES['fic']['tmp_name']));
        $req = "INSERT INTO pictures (img_name, img_size, img_type, img_blob, img_cat) VALUES ('$img_nom', '$img_taille', '$img_type', '$img_blob', '$img_cat'); ";
        $ret = mysql_query ($req) or die (mysql_error ());
        return true;
    }
?>