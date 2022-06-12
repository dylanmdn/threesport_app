<?php

require './admin/traitement/database_adm.php';


if (!empty($_POST['name_admin']) && !empty($_POST['password'])) {

    $nom_admin = htmlspecialchars($_POST['name_admin']);
    $password = ($_POST['password']);

    $password = hash('sha256', $password);

    $register = $database->prepare("INSERT INTO admin (login_admin, password) VALUES (?,?)");
    $register->execute(array($nom_admin, $password));

    echo "Good";
}
