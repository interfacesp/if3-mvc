<?php

if(isset($_POST["courriel"], $_POST["petit_mot"])){
    //Il y a quelque chose à traiter -> le formulaire de contact a été soumis

    $msg = $_POST["petit_mot"];
    $expediteur = $_POST["courriel"];

    // echo "<p>Message reçu de  $expediteur</p>"; 

    // echo "<p> $msg </p>";
    

    header("Location:index.php?view=contact&success=1");
}
