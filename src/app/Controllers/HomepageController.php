<?php
declare(strict_types = 1);



class HomepageController
{
    public function index()
    {
        // Usually, any required data is prepared here
        // For the home, we don't need to load anything

        // Load the view
        $model = new Users;
        $users = $model -> getUsers();

        foreach($users as $key => $user){
            $users[$key] = new User($user['username'],$user['email'],$user['password'], $user['signature'], $user['avatar']);
        }
        require '../app/View/home.php';
    }
}