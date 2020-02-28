<?php


namespace App\Controllers;


use Core\Validator;

class TaskValidator  extends Validator
{
    protected $errors = [
        'userNameError' => 'The Name < 2 letters !',
        'emailError' => 'Email date is invalid !',
        'taskError' => 'The Name < 20 letters !',
    ];
    protected $rules = [
        'userNameRules' => '/^[A-Za-zА-Яа-яЁё]{2,}$/',
        'emailRules' => '/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$/',
        'taskRules' => '/^[A-Za-zА-Яа-яЁё]{20,}$/',
    ];
}