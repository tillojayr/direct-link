<?php

require __DIR__.'/vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

class FirestoreService
{
    private $firestore;

    public function __construct()
    {
        $serviceAccountPath = __DIR__ . '/app-test-773a5-firebase-adminsdk-ljmal-8836f70d82.json';

        // Initialize Firestore
        $this->firestore = new FirestoreClient([
            'projectId' => 'app-test-773a5',
            'keyFilePath' => $serviceAccountPath
        ]);
    }

    public function insertData($datas, $collection)
    {
        $collectionReference = $this->firestore->collection($collection);

        $newDocumentRef = $collectionReference->add($datas);

        return $newDocumentRef->id();
    }

    public function updateData($collection, $data, $id)
    {
        $documentReference = $this->firestore->collection($collection)->document($id);

        $documentReference->set($data, ['merge' => true]);

        return $id;
    }

    public function fetchData($collection, $id)
    {
        $documentReference = $this->firestore->collection($collection)->document($id);

        $snapshot = $documentReference->snapshot();
        $data = $snapshot->data();

        return $data;
    }

    public function fetchDataWhere($collection, $conditions = [])
    {
        $collectionReference = $this->firestore->collection($collection);

        if (!empty($conditions)) {
            foreach ($conditions as $field => $value) {
                $collectionReference = $collectionReference->where($field, '=', $value);
            }
        }

        $documents = $collectionReference->documents();
        $results = [];

        foreach ($documents as $document) {
            if ($document->exists()) {
                $results[] = $document->data();
            }
        }

        return $results;
    }

}