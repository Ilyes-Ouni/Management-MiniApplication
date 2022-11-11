<?php
$id = $_POST['id'];

if($id){
    // connect to database
    $cx = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($cx, 'dsi23');

    // selection
        $req = "select * from etudiant where id= $id";

    // Query the database
        $res = mysqli_query($cx, $req);
        if ($res->num_rows > 0) {
            echo "<table border=1>";
            while($row = $res->fetch_assoc()) {
                $id = $row["id"];
                $nom = $row["nom"];
                $prenom = $row["prenom"];
                echo "<tr><td>$id</td> <td>$nom</td> <td>$prenom</td></tr>";
            }
            echo "</table>";
        } else {echo "0 results";}
} echo "Error Occured";


// mysqli_fetch_array() --> tableau associative / indicatif
// mysqli_fetch_assoc() --> tableau associative
// mysqli_fetch_row() --> tableau indicatif
// mysqli_fetch_object() --> tableau sous forme d'object

?>