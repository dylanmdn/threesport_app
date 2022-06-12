<?php
session_start();
require 'traitement/database.php';


if (!empty($_POST['user_name']) && !empty($_POST['password'])) {

    $user_name = htmlspecialchars($_POST['user_name']);
    $password = htmlspecialchars($_POST['password']);

    $req = $database->prepare('SELECT id_triathlete, nom_du_triathlete,prenom_du_triathlete, password FROM triathlete WHERE nom_du_triathlete = ?');
    $req->execute(array($user_name));

    $data = $req->fetch();
    $row = $req->rowCount();

    if ($row == 1) {

        $password = hash('sha256', $password);

        if ($data['password'] === $password) {
            $_SESSION['user_name'] = $data['nom_du_triathlete'];
            $_SESSION['user_last'] = $data['prenom_du_triathlete'];
            $_SESSION['id'] = $data['id_triathlete'];
            header("location: interface_user.php");
            
        } else header("location: login.php?err=password");
    } else header("location: login.php?err=connection");
}
