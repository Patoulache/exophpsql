<?php
    require_once ("connexion.php");
    $connect = new connexion();
    $connect->connect();
/*     $reponse = $connect->bdd->query("SELECT type_de_pelage FROM `felins` WHERE type_espece='chat des marais'");
    $donnees = $reponse->fetch();
    echo $donnees["type_de_pelage"];

  $reponse->closeCursor(); // Termine le traitement de la requête
 */
     $connect->para("type_de_pelage","felins","type_espece='chat des marais'");
?>