<?php


namespace App\Model;


use Core\Model;
use PDO;

class Task extends Model
{
    protected $tableName = 'tasks';

    public function __construct()
    {
        $this->getDB();
    }

    public function insert(array $taskData)
    {

        $sql = "INSERT INTO {$this->tableName} (user_name,email,task) VALUES (:userName,:email,:task)";
        $this->sql($sql, $taskData);
        $this->lastInsertId = $this->db->lastInsertId();


    }

    public function getAllTask()
    {
        $sql = "SELECT * FROM {$this->tableName}  ORDER BY `created_at` DESC";
        $this->sql($sql);
        $tasks = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return !empty($tasks) ? $tasks : false;
    }

    public function getTaskById(int $id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id ={$id}";
        $this->sql($sql);
        $task = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return !empty($task) ? $task : false;
    }

    public function updateTask(array $taskData)
    {

        $updateAtToday = date("Y-m-d H:i:s");
        $sql = "UPDATE {$this->tableName} SET task="
            . "'"
            . "{$taskData['task']}"
            . "'"
            . ","
            . "created_at="
            . "'"
            . $updateAtToday
            . "'"
            . ","
            . "is_edit="
            . "'"
            . "{$taskData['is_edit']}"
            . "'"
            . " WHERE id = {$taskData['id']};";

        $this->sql($sql);
    }

    public function complitedTask(int $id)
    {
        $updateAtToday = date("Y-m-d H:i:s");
        $sql = "UPDATE {$this->tableName} SET is_task="
            . "'"
            . "1"
            . "'"
            . " WHERE id = "
            . $id
            . ";";
        $this->sql($sql);
    }
}