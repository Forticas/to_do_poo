<?php

require_once 'models/Task.php';

class TaskController
{
    public function index()
    {
        // instance
        $task = new Task();
        // récupérer la liste des tâches
        $tasks = $task->findAll('Task');
        ob_start() ;
        require_once 'views/task/index.php';
        $content = ob_get_clean();
        require_once 'views/layout.php';
    }

    public function insert()
    {
        ob_start() ;
        require_once 'views/task/insert.php';
        $content = ob_get_clean();
        require_once 'views/layout.php';
    }

    public function delete()
    {
        echo "Task controller ".__FUNCTION__;
    }

    public function edit()
    {
        echo "Task controller ".__FUNCTION__;
    }
}