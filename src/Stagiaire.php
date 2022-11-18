<?php

class Stagiaire {
    public string $numero_national; 
    public string $nom_stag; 
    public string $prenom_stag;
    //format date: yyyy-mm-dd
    //exemple: 2022-11-17 pour le 17 novembre 2022
    public string $date_naissance;
    

    function __construct(string $numNational, string $nom, string $prenom, $dateNaissance)
    {
        $this->numero_national = $numNational;
        $this->nom_stag = $nom;
        $this->prenom_stag = $prenom;
        $this->date_naissance = $numNational;
        
    }
    

}