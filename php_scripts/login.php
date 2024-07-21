<?php

include 'FirebaseService.php';
session_start();
$_SESSION['seeker_has_login'] = false;

// $setUserSession = new SetUserSession();

function setUserSession($user_id){
    
    $table = 'user';
    $key = $user_id;
    
    $_SESSION['user_id'] = $user_id;

    $firebaseService = new FirebaseService();
    $user_datas = $firebaseService->fetchDatas($table, $key);
    
    foreach($user_datas as $key => $value){
        $_SESSION[$key] = $value;
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    // Add the new user and get the generated key
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $firebaseService = new FirebaseService();
    $loginResult = $firebaseService->loginUser($email, $password);

    $result = array();
    if (is_array($loginResult)) {

        setUserSession($loginResult['localId']);

        $result['registered'] = true;
        $result['result'] = $loginResult;

        if(isset($_SESSION['role'])){
            if($role == $_SESSION['role']){
                $_SESSION['seeker_has_login'] = true;
                $result['role'] = $_SESSION['role'];
            }
            else{
                $result['registered'] = false;
                $result['message'] = 'Error: INVALID_LOGIN_CREDENTIALS';
            }
        }
        else{
            $result['role'] = 'undefined';
        }

    } else {
        $result['registered'] = false;
        $result['message'] = $loginResult;
    }

    echo json_encode($result);
}

?>