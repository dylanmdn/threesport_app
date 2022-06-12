<?php
session_start();

require './admin/traitement/database_adm.php';

/* recupérer tous les triathlon de la table triathlon puis update */

$sql = 'SELECT * FROM triathlon ORDER BY date_triathlon ASC';
$statement = $database->prepare($sql);
$statement->execute();

$all_triathlon = $statement->fetchAll(PDO::FETCH_OBJ);



if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'SELECT * FROM triathlon WHERE id_triathlon=:id';
    $statement = $database->prepare($sql);
    $statement->execute([':id' => $id]);
    $triathlon = $statement->fetch(PDO::FETCH_OBJ);
}


if (isset($_POST['name_thiathlon']) && isset($_POST['lieu_triathlon']) && isset($_POST['date_triathlon']) && isset($_POST['distance_nat']) && isset($_POST['distance_cycl']) && isset($_POST['distance_pied'])  ) {

    $nom_triath = ucwords(strtolower($_POST['name_thiathlon']));
    $lieu_triath = ucwords(strtolower($_POST['lieu_triathlon']));
    $date_triath = $_POST['date_triathlon'];
    $distance_nat = $_POST['distance_nat'];
    $distance_cycl = $_POST['distance_cycl'];
    $disctance_pied = $_POST['distance_pied'];


    $sql = 'UPDATE triathlon  SET nom_triathlon =:name_thiathlon, lieu_triathlon =:lieu_triathlon, date_triathlon=:date_triathlon, distance_natation=:distance_nat, distance_cyclisme=:distance_cycl, distance_course_pied =:distance_pied  WHERE id_triathlon = :id';
    $statement = $database->prepare($sql);
    
    if($statement->execute([':name_thiathlon' => $nom_triath, ':lieu_triathlon' => $lieu_triath, ':date_triathlon'=>$date_triath, ':distance_nat'=>$distance_nat,':distance_cycl'=>$distance_cycl, ':distance_pied'=>$disctance_pied, ':id' => $id])){

        header('location: triathlon_admin.php');

    }

}




