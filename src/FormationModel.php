<?php 
include_once 'DBConnection.php';
include_once 'Formation.php';

class FormationModel {


    public DBConnection $myConnection; 
    private PDO $myPDO; 

    function __construct()
    {
        $this->myConnection = new DBConnection("if3");
        $this->myPDO= $this->myConnection->open();
    
    }

    function __destruct()
    {
        $this->myConnection->close();
    }

    function getAllTrainings() : Array {
        
        $query= "
                SELECT * FROM formations;

         ";
        $request= $this->myPDO->prepare($query);
        $request->execute();
        $result = $request->fetchAll();

        $allTrainings = [];

        foreach ($result as $formation) {
            
            $aFormation = new Formation($formation["id"],$formation["nom"] );

            //Autre façon de faire
            // $aFormation->id = $formation["id"]; 
            // $aFormation->nom = $formation["nom"];
            
           
            $allTrainings [] =  $aFormation;

        }

        return $allTrainings;


    }


   



    
   
}