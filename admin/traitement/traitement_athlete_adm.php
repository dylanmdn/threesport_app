<?php
session_start();

require './admin/traitement/database_adm.php';

/* recupérer tous les triathletes de la table triathlete puis update */

$sql = 'SELECT * FROM triathlete ORDER BY nom_du_triathlete ASC';
$statement = $database->prepare($sql);
$statement->execute();

$all_triathlete = $statement->fetchAll(PDO::FETCH_OBJ);




if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'SELECT * FROM triathlete WHERE id_triathlete=:id';
    $statement = $database->prepare($sql);
    $statement->execute([':id' => $id]);
    $triathlete= $statement->fetch(PDO::FETCH_OBJ);
}


if (!empty($_POST['name_triathlete']) && !empty($_POST['prenom_triathlete']) && !empty($_POST['date_naissance']) && !empty($_POST['sexe']) && !empty($_POST['adresse_postale'])) {

    $nom = ucwords(strtolower($_POST['name_triathlete']));
    $prenom= ucwords(strtolower($_POST['prenom_triathlete']));
    $date_naissance = $_POST['date_naissance'];
    $sexe = ucwords(strtolower($_POST['sexe']));
    $adresse_postale = ucwords(strtolower($_POST['adresse_postale']));


    $sql = 'UPDATE triathlete  SET nom_du_triathlete =:name_triathlete, prenom_du_triathlete =:prenom_triathlete, date_de_naissance=:date_naissance, sexe_triathlete=:sexe, adresse_triathlete=:adresse_postale WHERE id_triathlete = :id';
    $statement = $database->prepare($sql);
    
    if($statement->execute([':name_triathlete' => $nom, ':prenom_triathlete' => $prenom, ':date_naissance'=>$date_naissance, ':sexe'=>$sexe,':adresse_postale'=>$adresse_postale, ':id' => $id])){

        header('location: triathlete_admin.php');

    }

}





