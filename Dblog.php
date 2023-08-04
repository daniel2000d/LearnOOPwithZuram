<?php
require_once 'AbstractLogger.php';
class Dblog extends AbstractLogger
{
    public function log(string $level,string $logMessage)
    {
        echo "calling method" . __METHOD__;
    }

    public function success(string $logMessage)
    {
        // TODO: Implement success() method.
    }
}