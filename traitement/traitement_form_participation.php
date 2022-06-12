<?php
session_start();

require 'traitement/database.php';

$id = $_GET['id'];

$sql = 'SELECT * FROM triathlon WHERE id_triathlon=:id';
$statement = $database->prepare($sql);
$statement->execute([':id'=>$id]);

$triathlon = $statement->fetch(PDO::FETCH_OBJ);


    
if(isset($_POST['id_user']) && isset($_POST['triathlon'])){
        
    $id_user = htmlspecialchars($_POST['id_user']);
    $triathlon = htmlspecialchars($_POST['id_triathlon']);
    $date = date('Y-m-d H:i:s');
    
    

    $sql = $database->prepare("INSERT INTO inscription (id_triathlon, id_triathlete,date_inscription ) VALUES (?,?,?)");
    $sql ->execute(array($triathlon, $id_user, $date));


    
    header('location:interface_user.php');

}