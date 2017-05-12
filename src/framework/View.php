<?php

namespace src\framework;

class View
{
    public function build($file, array $params = [])
    {
        extract($params);
        require_once $file;
    }
}