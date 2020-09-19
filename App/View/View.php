<?php


namespace App\View;


use App\MagicPropertiesTrait;

class View implements \Countable, \Iterator
{
    use MagicPropertiesTrait;

    protected $data = [];

//    public function assign($name, $value)
//    {
//        $this->data[$name] = $value;
//    }

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * @param $template
     */
    public function display($template)
    {
        foreach ($this->data as $index => $value) {
            $$index = $value;
        }
        include $template;

    }

    /**
     * @param $template
     * @return false|string
     */
    public function render($template)
    {
        ob_start();
        $this->display($template);
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }


    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->data);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->data);
    }


    public function next(): void
    {
        next($this->data);
    }

    /**
     * @return int|mixed|string|null
     */
    public function key()
    {
        return key($this->data);
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return null !== key($this->data);
    }

    public function rewind(): void
    {
        reset($this->data);
    }

}