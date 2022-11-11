<?php include ("connexion.php"); ?>
<?php
$codeEm=$_POST['codeEm'];

$requet="delete from loan where codeEmprunt  = '$codeEm'";
$ok= mysqli_query($idcon, $requet);

if($ok==FALSE) echo "Problème de suppression <br/>"; 
else echo "Suppression effectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>