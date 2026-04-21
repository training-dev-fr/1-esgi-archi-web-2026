<?php
    
    function getAllUsers(){
        $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost','root','');
        $req = $bdd->prepare("SELECT * FROM user");
        $req->execute();
        return $req->fetchAll();
    }