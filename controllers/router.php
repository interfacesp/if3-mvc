<?php

include_once "./src/FormationModel.php";

if (isset($_GET["view"])){
    $viewType = $_GET["view"]; 


    switch ($viewType) {

        case 'formations':
            $formationModel = new FormationModel();
            $trainings = $formationModel->getAllTrainings();
            require("views/viewFormations.php");
            break; 

        case 'contact': 
            require("views/viewContact.php");
            break; 

        case 'inscription':
            require("views/viewInscription.php");
            break;
        
        default:
            //Si aucune correspondance, indique que page non trouvée 
            require("views/404.php");
            break;
    }

}else {
    echo "<p>Bienvenue</p>";
}





?>