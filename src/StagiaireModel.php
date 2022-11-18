<?php 
include_once 'DBConnection.php';
include_once 'Stagiaire.php';

class StagiaireModel {


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

    function getAllStagiaires() : Array {
        
        $query= "
                SELECT * FROM stagiaires;

         ";
        $request= $this->myPDO->prepare($query);
        $request->execute();
        $result = $request->fetchAll();

        $allStudents= [];

        foreach ($result as $stagiaire_db_row) {
            

        }

        return $allStudents;


    }


   



    
   
}