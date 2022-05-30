<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=infinite-measures_by_Ross248;charset=utf8", "root_1", "Root1234");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }