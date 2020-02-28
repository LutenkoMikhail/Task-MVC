<?php


namespace Core;


abstract class Controller
{
    protected $validation = true;
    protected $data = [];

    /**
     * User function call function
     * @param $name
     * @param $args
     * @throws \ErrorException
     */
    public function __call($name, $args)
    {
        $method = $name;
        if (method_exists($this, $method)) {
            if ($this->before() !== false) {
                call_user_func_array([$this, $method], $args);
                $this->after();
            } else {
                throw new \ErrorException("Metod $method not found in controller");
            }
        }
    }

    /**
     * Before user function
     */
    protected function before()
    {

    }

    /**
     * After user function
     */
    protected function after()
    {

    }

}