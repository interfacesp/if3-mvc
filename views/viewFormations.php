<h1>
    Formations
</h1>


<ul>
    <?php 

    foreach ($trainings as $uneFormation ) {

        echo "<li> $uneFormation->id : $uneFormation->nom </li>";

    }
        
    ?>
</ul>


