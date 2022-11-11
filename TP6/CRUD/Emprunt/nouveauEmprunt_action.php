<?php include ("connexion.php"); ?>
<?php
 $codeEmprunt=$_POST['codeEmprunt'];
 $codeEtudiant=$_POST['codeEtudiant'];
 $codeLivre=$_POST['codeLivre'];
 $dateEmprunt=$_POST['dateEmprunt'];

 $requete="insert into loan values ('$codeEmprunt','$codeEtudiant','$codeLivre','$dateEmprunt')";
 $ok=mysqli_query($idcon, $requete);
 
 if($ok==FALSE) echo "Problème d'insertion <br/>"; 
 else echo "Insertion efectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>