<?php
session_start();

require './admin/traitement/database_adm.php';


/* ajouter un triathlon */

if (!empty($_POST['triathlon_name']) && !empty($_POST['triathlon_lieu']) && !empty($_POST['triathlon_date']) && !empty($_POST['distance_nat']) && !empty($_POST['distance_cycl']) && !empty($_POST['course_pied'])){

    $nom = ucwords(strtolower($_POST['triathlon_name']));
    $lieu = ucwords(strtolower($_POST['triathlon_lieu']));
    $date = $_POST['triathlon_date'];
    $natation = $_POST['distance_nat'];
    $cyclisme = $_POST['distance_cycl'];
    $course_pied = $_POST['course_pied'];
    $create_by = $_SESSION['id'];

    $sql = 'INSERT INTO triathlon (nom_triathlon, lieu_triathlon, date_triathlon, distance_natation, distance_cyclisme, distance_course_pied,id_admin) VALUES (?,?,?,?,?,?,?)';
    $statement = $database->prepare($sql);
    if($statement->execute([$nom,$lieu,$date,$natation,$cyclisme,$course_pied,$create_by])){

        header('location: triathlon_admin.php');
    }

    
}




