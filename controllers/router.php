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
        
        default:
            # code...
            require("views/404.php");
            break;
    }

}else {
    echo "<p>Bienvenue</p>";
}





?>