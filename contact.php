<?php

if(isset($_POST["courriel"], $_POST["petit_mot"])){
    //Il y a quelque chose à traiter -> le formulaire de contact a été soumis

    $msg = $_POST["petit_mot"];
    $expediteur = $_POST["courriel"];

    // echo "<p>Message reçu de  $expediteur</p>"; 
    //TODO laisser tomber
    // $ok= mail("espoir.gahungere@interface3.be", "Test", "Hello World");
    // echo "<p> $msg </p>";
    if($ok){
        header("Location:index.php?view=contact&success=1");

    }else {
        header("Location:index.php?view=contact&error=1");

    }
}
