<?php
include 'user.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$resource = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if($resource == "/users"){
    if($method == "GET"){
        $users = getAllUsers();
        echo json_encode($users);
    }
}