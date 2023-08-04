<?php
require_once 'LoggerInterface.php';

abstract class AbstractLogger implements LoggerInterface
{
    public function info(string $logMessage)
    {
        $this->log('info', $logMessage);

    }
 public function error(string $logMessage)
 {
     $this->log('error', $logMessage);
 }
 public function warning(string $logMessage)
{
    $this->log('warning', $logMessage);
}
public function succes(string $logMessage)
{
    $this->log("succes",$logMessage);
}
}