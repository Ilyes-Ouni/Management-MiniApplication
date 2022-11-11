<?php include ("connexion.php"); ?>
<?php
$codeE=$_POST['codeE'];

$requet="delete from student where codeEtudiant = '$codeE'";
$ok= mysqli_query($idcon, $requet);

if($ok==FALSE) echo "Problème de suppression <br/>"; 
else echo "Suppression effectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>