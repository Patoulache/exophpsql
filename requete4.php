<?php
    require_once ("connexion.php");
    $connect = new connexion();
    $connect->connect();
  /*   $a = "nombre_dents,type_alimentation,type_reproduction,habitat_naturel";
    $b = "`felins` JOIN `espece` ON felins.type_espece=espece.type_espece JOIN `main` ON espece.id_espece=main.id_espece JOIN `sauvage` ON main.id_categorie=sauvage.id_categorie JOIN `alimentation` ON main.id_alimentation=alimentation.id_alimentation JOIN `reproduction` ON main.id_reproduction=reproduction.id_reproduction";

    $connect->para($a,$b); */

    $reponse = $connect->bdd->query("SELECT nombre_dents,type_alimentation,type_reproduction,habitat_naturel FROM `felins` JOIN `espece` ON felins.type_espece=espece.type_espece JOIN `main` ON espece.id_espece=main.id_espece JOIN `sauvage` ON main.id_categorie=sauvage.id_categorie JOIN `alimentation` ON main.id_alimentation=alimentation.id_alimentation JOIN `reproduction` ON main.id_reproduction=reproduction.id_reproduction");
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);

    foreach ($donnees as $valeur) {
        echo $valeur["nombre_dents"]." ".$valeur["type_alimentation"]." ".$valeur["type_reproduction"]." ".$valeur["habitat_naturel"]."<br>";
    }
  $reponse->closeCursor(); // Termine le traitement de la requête 

  
/*     class megareq {
        $arg1 = nombre_dents;
        $arg2 = type_alimentation;
        $arg3 = type_reproduction;
        $arg4 = habitat_naturel;
        $arg5 = `felins`;
        $arg6 = `espece`;
        $arg7 =  
    }
?>

$gg = new {};
for ($i=0; $i<count(array); $i++){
    $gg[$i] = array[$i];
} */