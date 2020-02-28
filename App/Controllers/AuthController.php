<?php


namespace App\Controllers;


use Core\Controller;
use Core\View;
use App\Model\User;

class AuthController extends Controller
{
    public function verify()
    {

    }
    public function login()
    {
        View::render('auth/login.php');

    }

    public function register()
    {
        View::render('auth/register.php');
    }



    public function logout()
    {

    }
}