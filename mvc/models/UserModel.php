<?php
require 'connection.php';

$app['db'] = (new Database())->db;

$userName = $_POST['userName'];
$uploadedImage = $_FILES['profileImage']['name'];

class UserModel {
    // Database connection and other necessary properties
    public function create($data) {
        // Perform database insert operation using $data
        $ins = $app['db']->query("INSERT INTO uploaded_images(name,profile_image)VALUES('$userName','$filePath')");

    }

    public function read($id) {
        // Perform database select operation based on $id
    }

    public function update($id, $data) {
        // Perform database update operation based on $id and $data
    }

    public function delete($id) {
        // Perform database delete operation based on $id
    }

    public function getAllUsers() {
        // Retrieve all users from the database
    }
}