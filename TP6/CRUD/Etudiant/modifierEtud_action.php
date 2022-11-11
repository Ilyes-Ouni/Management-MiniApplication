<?php include ("connexion.php"); ?>
<?php
 $code=$_POST['code'];
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $adresse=$_POST['adresse'];
 $classe=$_POST['classe'];
 
 
 $cx = mysqli_connect('localhost', 'root', '');
 mysqli_select_db($cx, 'bib');

 $req = "UPDATE `student` SET nom='$nom', prenom='$prenom', adresse='$adresse', classe='$classe' WHERE codeEtudiant = $code";

 // Query the database
     $res = mysqli_query($cx, $req);
     echo $res;

 ?>
 <?php include ("deconnexion.php"); ?>