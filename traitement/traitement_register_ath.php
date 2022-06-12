<?php

    require 'traitement/database.php';


    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['date_naissance']) && !empty($_POST['sexe']) && !empty($_POST['password'])){
        
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $date_naissance = htmlspecialchars($_POST['date_naissance']);
        $genre = htmlspecialchars($_POST['sexe']);
        $password = ($_POST['password']);

        $password = hash('sha256', $password);

        $register = $database->prepare("INSERT INTO triathlete (nom_du_triathlete, prenom_du_triathlete, sexe_triathlete, adresse_triathlete, date_de_naissance, password) VALUES (?,?,?,?,?,?)");
        $register ->execute(array($nom, $prenom, $genre, $adresse, $date_naissance, $password ));
        
        header("location: login.php");

    }
    

