<?php

declare(strict_types = 1);


class TopicController
{
    public function index()
    {
        $model = new Topics;
        $topics = $model -> getTopics();

        foreach($topics as $key => $topic){
            $topics[$key] = new Topic($topic['author'],$topic['content'],$topic['creation_date'], $topic['id_board'], $topic['state'], $topic['title']);
        }
        // Load the view
        require '../app/View/topics/indextopic.php';
    }

    public function show()
    {
        $model = new Topics;
        $topic = $model -> getSingleTopic($_GET['author']);
        $topic = new Topic($topic['author'],$topic['content'],$topic['creation_date'], $topic['id_board'], $topic['state'], $topic['title']);
        // Load the view
        require '../app/View/topics/showtopic.php';
    }
}