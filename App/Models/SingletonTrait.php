<?php

namespace App\Models;

trait SingletonTrait
{
    /**
     * @var SingletonTrait
     */
    private static $instance;

    /** Запрещаем конструктор
     * SimpleSingleton constructor.
     */
   private function __construct(){}


    /**запрещаем клонировнаие
     */
    private function __clone(){}


    /**
     * serialize is not allowed
     */
    private function __wakeup(){  }

    /**
     * @return SingletonTrait
     */
    public static function getInstance(): self
    {
        return static::$instance ?? (static::$instance = new static());
    }


}