<?php

require_once 'model.php';

class bdController
{
    public function index()
    {
        $tasks = bdModel::getAllTasks();
        include 'display/index.php';
    }

    public function current()
    {
        $tasks = bdModel::getTasksByStatus('текущая задача');
        include 'display/index.php';
    }
  
  	public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            bdModel::createTask($data);
            header('Location: index.php');
        } else {
            include 'display/create.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            bdModel::updateTask($id, $data);
            header('Location: index.php');
        } else {
            $task = bdModel::getTask($id);
            include 'display/edit.php';
        }
    }

    public function overdue()
    {
        $tasks = bdModel::getTasksByStatus('просроченная');
        include 'display/index.php';
    }

    public function completed()
    {
        $tasks = bdModel::getTasksByStatus('готово');
        include 'display/index.php';
    }

    public function show($id)
    {
        $task = bdModel::getTask($id);
        include 'display/show.php';
    }

    public function markAsCompleted($id)
    {
        $task = bdModel::getTask($id);

        if ($task['status'] !== 'готово') {
            bdModel::statusTaskAsCompleted($id);
        }

        header('Location: index.php');
    }
    public function tasksByDate()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $date = $_POST['date'];
        $tasks = bdModel::getTasksByDate($date);
        include 'display/index.php';
    } else {
        include 'display/tasks_by_date.php';
    }
}

public function today()
{
    $tasks = bdModel::getTasksForToday();
    $listTitle = 'Задачи на сегодня';
    include 'display/index.php';
}

public function tomorrow()
{
    $tasks = bdModel::getTasksForTomorrow();
    $listTitle = 'Задачи на завтра';
    include 'display/index.php';
}

public function week()
{
    $tasks = bdModel::getTasksByWeek();
    $listTitle = 'Задачи на текущую неделю';
    include 'display/index.php';
}


public function nextweek()
{
    $tasks = bdModel::getTasksByNextWeek();
    $listTitle = 'Задачи на след. неделю';
    include 'display/index.php';
}
   
    
}