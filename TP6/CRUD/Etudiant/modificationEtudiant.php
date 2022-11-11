<?php include "./connexion.php" ?>   


<h2>Veuillez remplir les champs suivants:</h2>

<form action="modifierEtud_action.php" method="POST">
    Code
    <select name="codes" id="codes">
<?php
    $requet="select codeEtudiant from student";
    $res= mysqli_query($idcon, $requet);

    while($ligne=mysqli_fetch_array($res)){
      echo  "<option value='$ligne[0]'>$ligne[0]</option>";
    }
?>
    </select><br><br>
    nom <input type="text" name="nom"><br><br>
    prenom <input type="text" name="prenom"><br><br>
    adresse <input type="text" name="adresse"><br><br>
    classe <input type="text" name="classe"><br><br>

    <button type="reset">Annuler</button>
    <button type="submit">Modifier</button>
</form>

<?php include "./deconnexion.php" ?>