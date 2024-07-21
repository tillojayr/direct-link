<?php

include 'FirestoreService.php';

$FirestoreService = new FirestoreService();

$datas = [
    'email' => 'asd@gmail.com'
];

$collection = 'job_seekers';

$FirestoreService->insertData($datas, $collection)

?>