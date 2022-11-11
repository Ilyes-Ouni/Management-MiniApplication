<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

if($id && $nom && $prenom){
    // connect to database
    $cx = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($cx, 'dsi23');

    // Insertion
        $req = "insert into etudiant values($id, '$nom', '$prenom')";

    // Query the database
        $res = mysqli_query($cx, $req);
        if($res) echo "Insertion OK";
        else echo "Insertion failed";
}else echo "Insertion failed";
?>