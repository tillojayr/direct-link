<?php

session_start();
// main.php
include 'FirebaseService.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $firebaseService = new FirebaseService();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $userData = [
        'name' => $_POST['name'],
        'contact_number' => $_POST['contact_number'],
        'role' => 'JOB SEEKER',
    ];

    $uid = $firebaseService->registerUser($email, $password, $userData);

    if ($uid) {
        
        if(str_contains($uid, 'Error')){
            $response = $uid;
        }
        else{
            $table = 'job-seekers';
            $datas = array(
                'user_id' => $uid,
                'email' => $email,
                'name' => $_POST['name'],
                'phone_number' => $_POST['contact_number'],
            );
            $response = $firebaseService->insertData($datas, $table);
        }

        echo json_encode($response);
    } else {
        echo json_encode(false);
    }
}


?>