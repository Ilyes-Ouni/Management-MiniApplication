<body>
<?php
$idcon=mysqli_connect("localhost" ,"root", "");
$okbd=mysqli_select_db($idcon ,"bib");


$requet="select * from book";
$res= mysqli_query($idcon, $requet);
?>

<table border="2">
<tr>
 <th> codeLivre</th>
 <th> titre</th>
 <th> auteur</th>
 <th> dateEdition</th>
</tr>
<?php
while($ligne=mysqli_fetch_array($res))
{
?>
<tr>
 <td><?php echo $ligne[0]; ?></td>
 <td><?php echo $ligne[1]; ?></td>
 <td><?php echo $ligne[2]; ?></td>
 <td><?php echo $ligne[3]; ?></td>
 </tr>
<?php
}
mysqli_close($idcon);
?>
</table>
</body>