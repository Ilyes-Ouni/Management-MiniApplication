<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

if($id && $nom && $prenom){
    // connect to database
    $cx = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($cx, 'dsi23');

    // Modification
        $req = "UPDATE `etudiant` SET nom='$nom',prenom='$prenom' WHERE id = $id";

    // Query the database
        $res = mysqli_query($cx, $req);
        if($res) echo "Modification OK";
        else echo "Modification failed";
}else echo "Modification failed";
?>