<?php

session_start();
// main.php
include '../FirebaseService.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $firebaseService = new FirebaseService();

    $table = 'user';
    $key = $_SESSION['user_id'];
    
    $user_datas = $firebaseService->fetchDatas($table, $key);

    echo json_encode($user_datas);
}

?>