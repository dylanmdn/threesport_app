<?php
session_start();

require './admin/traitement/database_adm.php';
    

if (!empty($_POST['name_admin']) && !empty($_POST['password'])) {

    $id = htmlspecialchars($_POST['name_admin']);
    $password = htmlspecialchars($_POST['password']);

    $req = $database->prepare('SELECT * FROM admin WHERE login_admin = ?');
    $req->execute(array($id));

    $data = $req->fetch();
    $row = $req->rowCount();


    if ($row == 1) {

        $password =  $password;

        if ($data['password'] === $password) {
            $_SESSION['name'] = $data['login_admin'];
            $_SESSION['id'] = $data['id_admin'];
            header("location: dashboard.php");
           
            
        } else header("location: login_admin.php?err=password");
    }else header("location: login_admin.php?err=connection");
}
