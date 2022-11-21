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
        
        //On écrit la requête SQL dans une variable - sous forme de texte
        // Attention: à ce stade, MySQL n'est pas encore contacté. 
        $query= "
                SELECT * FROM stagiaire;
         ";
        
        //********** Début Requête */
        //C'est vraiment ici que la communication DB commence
        $request= $this->myPDO->prepare($query); //préparation requête
        $request->execute(); // lancement exécution 
        $result = $request->fetchAll(); // réception résultats
        //******* FIN  */
        
        $allStudents= []; // tableau qui contiendra la liste des stagiaires sous forme d'objets


        foreach ($result as $uneligneTableStag) {
            //On emballe le résultat d'une ligne de table stagiaire, dans un objet Stagiaire
            $objStagiaire = new Stagiaire(
                $uneligneTableStag["numero_national"],
                $uneligneTableStag["nom"],
                $uneligneTableStag["prenom"],
                $uneligneTableStag["date_naissance"],
                $uneligneTableStag["email"]
            );
            //ajoute l'instance dans le tableau 
            $allStudents[] = $objStagiaire; 
        }

        return $allStudents;


    }


    function inscrire(Stagiaire $nouvStagiaire) : void{

        $query= "
                INSERT INTO stagiaire(numero_national,nom,prenom,date_naissance,email) VALUES(?,?,?,?,?); 
        "; 
        
        try {

                $request= $this->myPDO->prepare($query);
                $request->execute([
                    $nouvStagiaire->numero_national,
                    $nouvStagiaire->nom_stag,
                    $nouvStagiaire->prenom_stag,
                    $nouvStagiaire->date_naissance,
                    $nouvStagiaire->email
            ]);

        }catch (PDOException $exception){
            die("erreur dans l'insertion : $exception->getMessage()");
        }

       


    }


   



    
   
}