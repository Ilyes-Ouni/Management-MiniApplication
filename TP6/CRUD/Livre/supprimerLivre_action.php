<?php include ("connexion.php"); ?>
<?php
$codeL=$_POST['codeL'];

$requet="delete from book where codeLivre = $codeL";
$ok= mysqli_query($idcon, $requet);

if($ok==FALSE) echo "Problème de suppression <br/>"; 
else echo "Suppression effectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>