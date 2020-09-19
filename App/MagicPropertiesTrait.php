<?php


namespace App;


trait MagicPropertiesTrait
{

    protected $props= [];

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {

        $this->props[$name] = $value;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->props[$name];
    }


    /**
     * @param $name
     * @return mixed
     */
    public function __isset($name)
    {
        return $this->props[$name];
    }


}