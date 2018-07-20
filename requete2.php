<?php
    require_once ("connexion.php");
    $connect = new connexion();
    $connect->connect();
    $reponse = $connect->bdd->query("SELECT longueur_plumes FROM `oiseau` WHERE type_espece='aigle'");
    $donnees = $reponse->fetch();
    echo $donnees["longueur_plumes"];

  $reponse->closeCursor(); // Termine le traitement de la requête

?>