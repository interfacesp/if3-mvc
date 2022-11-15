<?php 


class Formation {
    public int $id; 
    public string $nom;
    // public string $financeur; 
    

    function __construct(int $anId, string $aName )
    {
        $this->id= $anId;
        $this->nom = $aName;
    }
   


}