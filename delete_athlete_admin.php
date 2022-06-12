<?php

require './admin/traitement/traitement_triathlon_adm.php';

$id = $_GET['id'];

$sql = 'DELETE  FROM triathlete WHERE id_triathlete = :id';
$statement = $database->prepare($sql);
if ($statement->execute([':id'=>$id])){
    header('location: triathlete_admin.php');
}
