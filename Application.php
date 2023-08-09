<?php
//require_once 'DatabaseInterface.php';
require_once 'CacheInterface.php';

class Application
{
  //  public $db;
    public $cache;
    public function __construct(CacheInterface  $cache)
    {
//        $this->db=$db;
        $this->cache=$cache ;


    }
}