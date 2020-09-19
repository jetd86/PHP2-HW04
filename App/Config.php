<?php


namespace App;



class Config
{

    use Models\SingletonTrait;

    /**
     * @var mixed
     */
    public $data;

    /**
     * Config constructor.
     */
    public  function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }
}