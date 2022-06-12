<?php

require 'traitement/database.php';

$sql = 'SELECT * FROM triathlon ORDER BY date_triathlon ASC ';
$query = $database->prepare($sql);
$query->execute();
$triathlon = $query->fetchAll(PDO::FETCH_OBJ);



