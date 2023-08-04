<?php
require_once 'CacheInterface.php';

class FileCache implements  CacheInterface
{
    public function set(string $key, $value )
    {

        echo "calling method" . __METHOD__;
    }


    public function get(string $key)
    {

    }
    public function invalidate(string $key)
    {

        echo "calling method" . __METHOD__;
    }
}