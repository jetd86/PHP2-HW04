<?php

namespace App\Models;


class Article extends Model
{

    public static $table = "news";

    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $contents;

    public $created_at;

    public $author_id;


    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if('author' == $name && $value instanceof Author){
            $this->author_id = $value->id;
        }
    }

    /**
     * @param $name
     * @return bool|mixed|null
     */
    public function __get($name)
    {
        if ('author' === $name && isset($this->author_id)) {
            $result = Author::findById($this->author_id);

            if (false !== $result) {
                return $result;
            }
        }

        return null;
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name): bool
    {
        if ('author' === $name) {
            return isset($this->author_id);
        }

        return false;
    }

}