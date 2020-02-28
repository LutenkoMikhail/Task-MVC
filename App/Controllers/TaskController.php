<?php


namespace App\Controllers;

use App\Model\Task;
use Core\Controller;
use Core\View;
use Strana\Paginator;

class TaskController extends Controller
{
    protected $task = null;
    protected $paginatorCount;

    public function __construct()
    {
        $this->task = new Task();
        $this->paginatorCount = 3;
    }

    public function index()
    {
        $strana = new Paginator();

        $tasks = $this->task->getAllTask();
        $paginator = $strana->perPage($this->paginatorCount)->make($tasks);
        View::render('task/index.php', [
            'paginator' => $paginator
        ]);
    }

    public function show(int $id)
    {
        $task = $this->task->getTaskById($id);
        View::render('task/show.php', ['task' => $task]);
    }

    public function create()
    {
        View::render('task/create.php');
    }

    public function store()
    {
        $dataTask = filter_input_array(INPUT_POST, $_POST, 1);
        $modelData = [
            'userName' => $dataTask['userName'],
            'email' => $dataTask['email'],
            'task' => $dataTask['task'],
        ];
        $this->task->insert($modelData);
        $taskID = $this->task->getLastInsertId();
        httpRedirect($taskID);
    }

    public function edit(int $id)
    {
        $task = $this->task->getTaskById($id);
        View::render('task/edit.php', ['data' => $task]);
    }

    public function update(int $id)
    {
        $dataTask = filter_input_array(INPUT_POST, $_POST, 1);

        $modelData = [
            'id' => $id,
            'task' => $dataTask['task'],
            'is_edit' => true,
//            'is_task' => "NULL",
        ];
        $this->task->updateTask($modelData);
        httpRedirect('/');
    }

    public function complited(int $id)
    {
        $this->task->complitedTask($id);
        httpRedirect('/');
    }
}