<?php

session_start();
// main.php
include 'FirebaseService.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // $_SESSION['seeker_has_login'] = false;
    $_SESSION['seeker_has_login'] = false;
    session_destroy();

    echo json_encode(true);
}


?>