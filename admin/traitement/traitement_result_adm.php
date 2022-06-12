<?php
session_start();

require './admin/traitement/database_adm.php';

/* recupérer tous les triathlon de la table triathlon puis update */

$sql = 'SELECT id_dossard,date_inscription,temps_natation,temps_course_cycliste,temps_course_pied,nom_du_triathlete,prenom_du_triathlete,nom_triathlon,lieu_triathlon,date_triathlon,classement_categorie FROM inscription, triathlon, triathlete WHERE inscription.id_triathlon = triathlon.id_triathlon AND inscription.id_triathlete = triathlete.id_triathlete ORDER BY `inscription`.`date_inscription` DESC';
$statement = $database->prepare($sql);
$statement->execute();

$all_result = $statement->fetchAll(PDO::FETCH_OBJ);






if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'SELECT id_dossard,date_inscription,temps_natation,temps_course_cycliste,temps_course_pied,nom_du_triathlete,prenom_du_triathlete,nom_triathlon,lieu_triathlon,date_triathlon,classement_categorie FROM inscription, triathlon, triathlete WHERE inscription.id_triathlon = triathlon.id_triathlon AND inscription.id_triathlete = triathlete.id_triathlete AND id_dossard = :id ORDER BY `inscription`.`date_inscription` DESC';
    $statement = $database->prepare($sql);
    $statement->execute([':id' => $id]);
    $result = $statement->fetch(PDO::FETCH_OBJ);
}




if (!empty($_POST['natation']) && !empty($_POST['cyclisme']) && !empty($_POST['course_pied']) || !empty($_POST['classement'])) {

    $natation = $_POST['natation'];
    $cyclisme = $_POST['cyclisme'];
    $course_pied = $_POST['course_pied'];
    $classement = $_POST['classement'];
    
    $sql = 'UPDATE inscription  SET temps_natation =:natation, temps_course_cycliste =:cyclisme, temps_course_pied=:course_pied, classement_categorie=:classement  WHERE id_dossard = :id';
    $statement = $database->prepare($sql);
    
    if($statement->execute([':natation' => $natation, ':cyclisme' => $cyclisme, ':course_pied'=>$course_pied, ':classement'=>$classement, ':id' => $id])){

        header('location: triathlete_inscrit_admin.php');

    }

}





