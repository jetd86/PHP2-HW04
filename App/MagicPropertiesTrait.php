<?php


namespace App;


trait MagicPropertiesTrait
{
    protected $props= [];


    public function __set($name, $value)
    {

        $this->props[$name] = $value;
    }


    public function __get($name)
    {
        return $this->props[$name];
    }

    public function __isset($name)
    {
        return $this->props[$name];
    }


}