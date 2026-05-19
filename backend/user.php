<?php

function getAllUsers()
{
    $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost', 'root', '');
    $req = $bdd->prepare("SELECT * FROM user");
    $req->execute();
    return $req->fetchAll();
}

function getUserById($id)
{
    $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost', 'root', '');
    $req = $bdd->prepare("SELECT * FROM user WHERE id=?");
    $req->execute(array($id));
    return $req->fetch();
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

function updateUser($user){
    $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost', 'root', '');
    $req = $bdd->prepare("UPDATE user SET name=?,mail=?,password=? WHERE id=?");
    return $req->execute(array($user->name, $user->mail, $user->password, $user->id));
}
