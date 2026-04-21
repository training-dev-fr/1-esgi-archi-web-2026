<?php
include 'user.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$resource = $_GET['data'];
$method = $_SERVER['REQUEST_METHOD'];

if($resource == "user"){
    if($method == "GET"){
        $users = getAllUsers();
        echo json_encode($users);
    }
}