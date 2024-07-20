<?php

include 'FirebaseService.php';
session_start();
$_SESSION['seeker_has_login'] = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $firebaseService = new FirebaseService();
    
    // Add the new user and get the generated key
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginResult = $firebaseService->loginUser($email, $password);

    $result = array();
    if (is_array($loginResult)) {
        $result['registered'] = true;
        $result['result'] = $loginResult;
        $_SESSION['user_id'] = $loginResult['localId'];
        $_SESSION['seeker_has_login'] = true;
    } else {
        $result['registered'] = false;
        $result['message'] = $loginResult;
    }

    echo json_encode($result);
}

?>