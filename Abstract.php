<?php

Abstract class Logger
{
    
    abstract public function setLogger($msg);
}

class Application extends Logger
{

    protected $log;

    public function __construct()
    {

    }

    public function setLogger($msg)
    {
        $this->log = $msg;
    }

    public function getLogger()
    {
        return $this->log;
    }
}

$app = new Application;
$app->setLogger('File not found');
var_dump($app->getLogger());


