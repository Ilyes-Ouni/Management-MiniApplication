<?php include ("connexion.php"); ?>
<?php
 $code=$_POST['code'];
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $adresse=$_POST['adresse'];
 $classe=$_POST['classe'];

 $requete="insert into student values ('$code','$nom','$prenom','$adresse','$classe')";
 $ok=mysqli_query($idcon, $requete);
 
 if($ok==FALSE) echo "Problème d'insertion <br/>"; 
 else echo "Insertion efectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>