<?php

session_start();
// main.php
include '../FirebaseService.php';

$firebaseService = new FirebaseService();


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [];
    // Check and handle file upload
    if (isset($_FILES['profile']) && $_FILES['profile']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = '../../assets/images/profile_pictures/'; // Directory to save the uploaded files
        $file_name = generateRandomString(10) . basename($_FILES['profile']['name']);
        $uploadFile = $uploadDir . $file_name;

        // Check if the uploads directory exists, if not, create it
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['profile']['tmp_name'], $uploadFile)) {
            $data['path'] = $file_name;
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    }

    // Handle other form data
    foreach ($_POST as $key => $val) {
        $data[$key] = $val;
    }

    $id = $_SESSION['user_id'];
    $table = 'user';

    $where = array(
        'user_id' => $id
    );

    $response = $firebaseService->updateData($table, $data, $id);

    echo json_encode($response);

} else {
    echo "Invalid request method.\n";
}


?>