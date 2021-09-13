<?php

declare(strict_types = 1);


class MessageController
{
    public function index()
    {
        $model = new Messages;
        $messages = $model -> getMessages();

        foreach($messages as $key => $message){
            $messages[$key] = new Message ($message['content'],$message['author'],$message['creation_date'], $message['edition_date']);
        }
        // Load the view
        require '../app/View/messages/indexmes.php';
    }

    public function show()
    {
        $model = new Messages;
        $messages = $model -> getSingleMessage($_GET['edition_date']);
        $messages = new Message ($messages['username'],$messages['avatar'],$messages['email'],$messages['passeword']);
        // Load the view
        require '../app/View/messages/showmes.php';
    }
}