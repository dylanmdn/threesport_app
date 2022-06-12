<?php

require 'traitement/database.php';

$id =  $_SESSION['id'];

$sql = 'SELECT * FROM inscription, triathlon WHERE inscription.id_triathlon = triathlon.id_triathlon AND id_triathlete = :id ORDER BY date_inscription DESC';
$statement = $database->prepare($sql);
$statement->execute([':id'=>$id]);

$competition = $statement->fetchAll(PDO::FETCH_OBJ);




