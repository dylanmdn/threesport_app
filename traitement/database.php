<?php
    try
    {
        $database = new PDO("mysql:host=127.0.0.1;dbname=threesport;charset=utf8","root","");
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e)
    {
        echo $e->getMessage();
    }


?>

