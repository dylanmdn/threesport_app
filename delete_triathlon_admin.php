<?php

require './admin/traitement/traitement_triathlon_adm.php';

$id = $_GET['id'];

$sql = 'DELETE  FROM triathlon WHERE id_triathlon = :id';
$statement = $database->prepare($sql);
if ($statement->execute([':id'=>$id])){
    header('location: triathlon_admin.php');
}
