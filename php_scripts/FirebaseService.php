<?php


// namespace App\Services;
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

class FirebaseService
{
    private $database;


    public function __construct()
    {
        $serviceAccountPath = __DIR__ . '/app-test-773a5-firebase-adminsdk-ljmal-8836f70d82.json';

        $factory = (new Factory)
            ->withServiceAccount($serviceAccountPath)
            ->withDatabaseUri('https://app-test-773a5-default-rtdb.asia-southeast1.firebasedatabase.app/'); // Correct URI

        $this->database = $factory->createDatabase();
        $this->auth = $factory->createAuth();
    }

    public function insertData($datas, $table)
    {
        $reference = $this->database->getReference($table);

        $newUserRef = $reference->push($datas);

        $newUserKey = $newUserRef->getKey();

        return $newUserKey;
    }

    public function updateData($table, $data, $id)
    {
        $reference = $this->database->getReference($table . '/' . $id);

        $reference->update($data);

        return $id;
    }

    public function fetchDatas($table, $key)
    {
        $reference = $this->database->getReference("$table/$key");

        $snapshot = $reference->getSnapshot();
        $data = $snapshot->getValue();

        return $data;
    }

    public function fetchDatasWhere($table, $conditions = [])
    {
        $reference = $this->database->getReference($table);

        if (!empty($conditions)) {
            foreach ($conditions as $field => $value) {
                $reference = $reference->orderByChild($field)->equalTo($value);
            }
        }

        $snapshot = $reference->getSnapshot();
        $users = $snapshot->getValue();

        return $users;
    }

    public function registerUser($email, $password, $userData)
    {
        try {
            $user = $this->auth->createUserWithEmailAndPassword($email, $password);
            $uid = $user->uid;

            // Add user data to Realtime Database
            $this->database->getReference('user/' . $uid)->set($userData);

            return $uid;
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function loginUser($email, $password)
    {
        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($email, $password);
            return $signInResult->data();
        } catch (\Kreait\Firebase\Exception\Auth\InvalidPassword $e) {
            return 'Invalid password!';
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            return 'User not found!';
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}



?>