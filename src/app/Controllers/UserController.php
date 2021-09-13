<?php

declare(strict_types = 1);


class UserController
{
    public function index()
    {
        $model = new Users;
        $users = $model -> getUsers();

        foreach($users as $key => $user){
            $users[$key] = new User($user['username'],$user['email'],$user['passeword'], $user['signature'], $user['avatar']);
        }
        // Load the view
        require '../app/View/users/index.php';
    }

    public function show()
    {
        $model = new Users;
        $user = $model -> getSingleUser($_GET['username']);
        $user = new User($user['username'],$user['avatar'],$user['email'],$user['passeword'], $user['signature']);
        // Load the view
        require '../app/View/users/show.php';
    }
}