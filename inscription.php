<?php

include_once "src/StagiaireModel.php";

$soumissionFormulaire = isset(
    $_POST["nom"], 
    $_POST["prenom"],
    $_POST["naissance"],
    $_POST["email"],
    $_POST["numNational"]); 

if($soumissionFormulaire){

    $nom = $_POST["nom"]; 
    $prenom = $_POST["prenom"];
    $naissance = $_POST["naissance"];
    $email = $_POST["email"];
    $numNational = $_POST["numNational"];

    echo "Nom: $nom";
    echo "Prenom: $prenom";
    echo "Email: $email"; 
    echo "Num national: $numNational";
    echo "Date naissance: $naissance";


    $nouvStag  = new Stagiaire($numNational,$nom,$prenom,$naissance,$email);
    $model = new StagiaireModel();
    $model->inscrire($nouvStag);

}
