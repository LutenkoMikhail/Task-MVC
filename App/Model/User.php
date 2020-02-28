<?php


namespace App\Model;


use Core\Model;
use PDO;

class User extends Model
{
    protected $tableName = 'users';

    public function __construct()
    {
        $this->getDB();
    }
}