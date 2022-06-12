<?php

require './admin/traitement/database_adm.php';

//nombre d'athlète
$sql = 'SELECT COUNT(*) FROM triathlete';
$statement = $database->prepare($sql);
$statement->execute();
$nb_athlete = $statement->fetchColumn();


//nombre d'triathlon
$sql = 'SELECT COUNT(*) FROM triathlon';
$statement = $database->prepare($sql);
$statement->execute();
$nb_triathlon = $statement->fetchColumn();

//nombre participant inscrit
$sql = 'SELECT COUNT(*) FROM inscription';
$statement = $database->prepare($sql);
$statement->execute();
$nb_participant = $statement->fetchColumn();


//tableau_d'athlète
$sql = 'SELECT nom_du_triathlete, prenom_du_triathlete, sexe_triathlete, date_de_naissance FROM triathlete ORDER BY nom_du_triathlete ASC';
$statement = $database->prepare($sql);
$statement->execute();
$athele = $statement->fetchAll(PDO::FETCH_OBJ);

//tableau_triathlon
$sql = 'SELECT nom_triathlon, lieu_triathlon, date_triathlon, distance_natation, distance_cyclisme, distance_course_pied FROM triathlon ORDER BY nom_triathlon ASC';
$statement = $database->prepare($sql);
$statement->execute();
$triathlon = $statement->fetchAll(PDO::FETCH_OBJ);

//tableau_participant
$sql = 'SELECT id_dossard,date_inscription,temps_natation,temps_course_cycliste,temps_course_pied,nom_du_triathlete,prenom_du_triathlete,nom_triathlon,lieu_triathlon,date_triathlon FROM inscription, triathlon, triathlete WHERE inscription.id_triathlon = triathlon.id_triathlon AND inscription.id_triathlete = triathlete.id_triathlete ORDER BY `inscription`.`date_inscription` DESC';
$statement = $database->prepare($sql);
$statement->execute();
$participant = $statement->fetchAll(PDO::FETCH_OBJ);











