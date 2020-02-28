<?php


namespace App\Controllers;


class AuthClass
{
    private $_login = "admin"; //Устанавливаем логин
    private $_password = "123"; //Устанавливаем пароль


    /**
     * Проверяет, авторизован пользователь или нет
     * Возвращает true если авторизован, иначе false
     * @return boolean
     */
    public function isAuth()
    {
        if (isset($_SESSION["is_auth"])) { //Если сессия существует
            return $_SESSION["is_auth"]; //Возвращаем значение переменной сессии is_auth (хранит true если авторизован, false если не авторизован)
        } else return false; //Пользователь не авторизован, т.к. переменная is_auth не создана
    }

    /**
     * Авторизация пользователя
     * @param string $login
     * @param string $passwors
     */
    public function auth()
    {
        $dataPost = filter_input_array(INPUT_POST, $_POST, 1);
        $login = $dataPost['textFirstName'];
        $password = $dataPost['password'];

        if ($login == $this->_login && $password == $this->_password) { //Если логин и пароль введены правильно
            $_SESSION["is_auth"] = true; //Делаем пользователя авторизованным
            $_SESSION["login"] = $login; //Записываем в сессию логин пользователя
        } else { //Логин и пароль не подошел
            $_SESSION["is_auth"] = false;
        }
        httpRedirect('/home');
    }

    /**
     * Метод возвращает логин авторизованного пользователя
     */
    public function getLogin()
    {
        if ($this->isAuth()) { //Если пользователь авторизован
            return $_SESSION["login"]; //Возвращаем логин, который записан в сессию
        }
    }


    public function out()
    {
        $_SESSION = array(); //Очищаем сессию
        session_destroy(); //Уничтожаем
        httpRedirect('/home');
    }
}