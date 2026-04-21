<?php
    $bdd = new PDO('mysql:dbname=esgi1-archi;host=localhost','root','');
    $req = $bdd->prepare("INSERT INTO user(mail,password) VALUE(?,?)");
    $req->execute(array($_POST['email'],$_POST['password']))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Inscription réussie, Bienvenue <?=  $_POST["email"] ?>
</body>
</html>