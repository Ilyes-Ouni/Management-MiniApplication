<?php include ("connexion.php"); ?>
<?php
 $codeLivre=$_POST['codeLivre'];
 $titre=$_POST['titre'];
 $auteur=$_POST['auteur'];
 $dateEdition=$_POST['dateEdition'];
 
 
 $cx = mysqli_connect('localhost', 'root', '');
 mysqli_select_db($cx, 'bib');

 $req = "UPDATE `book` SET titre='$titre', adresse='$auteur', classe='$dateEdition' WHERE codeLivre = $codeLivre";

 // Query the database
     $res = mysqli_query($cx, $req);
     echo $res;

 ?>
 <?php include ("deconnexion.php"); ?>