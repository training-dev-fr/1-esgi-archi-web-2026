<?php

function getAllUsers()
{
    $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost', 'root', '');
    $req = $bdd->prepare("SELECT * FROM user");
    $req->execute();
    return $req->fetchAll();
}

function addUser($user)
{
    $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost', 'root', '');
    $req = $bdd->prepare("INSERT INTO user(name,mail,password) VALUES(?,?,?)");
    return $req->execute(array($user->name, $user->mail, $user->password));
}

function getUserByMail($mail)
{
    $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost', 'root', '');
    $req = $bdd->prepare("SELECT * FROM user WHERE mail=?");
    $req->execute(array($mail));
    return $req->fetch();
}
