<?php

namespace App\Classes;


class Uri
{
    private $uri;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function emptUri(){
        return ($this->uri == '/') ? true : false;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }


}