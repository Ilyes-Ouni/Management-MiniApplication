<?php
$id = $_POST['id'];

if($id){
    // connect to database
    $cx = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($cx, 'dsi23');

    // Suppression
        $req = "DELETE FROM `etudiant` WHERE id = $id";

    // Query the database
        $res = mysqli_query($cx, $req);
        if($res) echo "Suppression OK";
        else echo "Suppression failed";
} else echo "Suppression failed";
?>