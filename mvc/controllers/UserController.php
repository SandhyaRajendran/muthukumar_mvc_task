<?php
require 'mvc/views/user/homePage.php';

require_once  'User';
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function create() {
        // Handle form submission for creating a new user

        if(isset($_POST['userName']) && isset($_FILES['profileImage'])){
            $userName = $_POST['userName'];
            $uploadedImage = $_FILES['profileImage']['name'];


            $filePath = 'imgStorage/'.$uploadedImage;

            move_uploaded_file($_FILES['profileImage']['tmp_name'],$filePath);
        }
    }

    public function edit($id) {
        // Handle form submission for updating an existing user
    }

    public function delete($id) {
        // Handle user deletion
    }

    public function index() {
        // Retrieve all users from the UserModel and load the index view
    }

    public function view($id) {
        // Retrieve a specific user from the UserModel and load the view view
    }
}
