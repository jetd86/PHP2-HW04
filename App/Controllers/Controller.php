<?php


namespace App\Controllers;


use App\View\View;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract protected function handle();

    protected function access()
    {
        return true;
    }

    public function action()
    {
        if ($this->access()) {
            return $this->handle();
        }

        die('Нет доступа');
    }

}