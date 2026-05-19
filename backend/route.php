<?php
include 'user.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
$resource = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($resource == "/users") {
    if ($method == "GET") {
        $users = getAllUsers();
        echo json_encode($users);
    } else if ($method == "POST") {
        $data = file_get_contents("php://input");
        $user = json_decode($data);
        addUser($user);
        echo json_encode(getUserByMail($user->mail));
    } else if ($method == "PUT") {
        $data = file_get_contents("php://input");
        $user = json_decode($data);
        updateUser($user);
        echo json_encode(getUserByMail($user->mail));
    }
} else if(preg_match("/\/users\/([0-9]+)/", $resource,$match)){
    $id = $match[1];
     echo json_encode(getUserById($id));
}
