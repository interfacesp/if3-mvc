

<h2>Nous contacter</h2>

<p>Merci d'utiliser le petit formulaire ci-dessous pour nous envoyer un petit mot! </p>

<form action="contact.php" method="post">

    <label for="id_courriel">Votre email: </label> <br> <br>
    <input type="email" name="courriel" id="id_courriel"> <br> <br>

    <label for="id_petit_mot">Votre Message : </label> <br> <br>
    <textarea name="petit_mot" id="id_petit_mot" cols="50" rows="3"></textarea> <br> <br>

    <input type="submit" value="Envoyer Message">

</form>

<?php

    if(isset($_GET["success"])){
        $msgEnvoiOk = $_GET["success"];
        if($msgEnvoiOk){
            echo "<p>Votre message a bien été envoyé :) </p>";
        } 
    }
 ?>