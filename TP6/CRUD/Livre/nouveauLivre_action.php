<?php include ("connexion.php"); ?>
<?php
 $codeLivre= $_POST['codeLivre'];
 $titre= $_POST['titre'];
 $auteur= $_POST['auteur'];
 $dateEdition= $_POST['dateEdition'];

 $requete="insert into book values ('$codeLivre','$titre','$auteur','$dateEdition')";
 $ok=mysqli_query($idcon, $requete);
 
 if($ok==FALSE) echo "Problème d'insertion <br/>"; 
 else echo "Insertion efectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>