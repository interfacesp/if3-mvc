<h1>
    Liste Stagiaires
</h1>


<ul>
    <?php 
        foreach ($students as $unStagiaire ) {
            echo "<h3>$unStagiaire->nom_stag  $unStagiaire->prenom_stag</h3>";  
            echo "<p>
                    Numéro National: $unStagiaire->numero_national <br>
                    Email: $unStagiaire->email
                 </p>";
            
        }        
    ?>
</ul>

