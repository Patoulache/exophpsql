<?php
    require_once ("connexion.php");
    $connect = new connexion();
    $connect->connect();
    $reponse = $connect->bdd->query("SELECT type_espece FROM `felins`");
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC sert à enlever l'indexation du tableau par chiffre.
    
    foreach ($donnees as $valeur) {
        echo $valeur["type_espece"]."<br>";
    }

  $reponse->closeCursor(); // Termine le traitement de la requête

?>