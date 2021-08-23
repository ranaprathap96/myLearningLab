<?php

interface Logger {

    public function setLogger($msg);
}

class Application implements Logger
{

    protected $logger;

    public function setLogger($msg)
    {
        return $this->logger = $msg;
    }

    public function getLogger()
    {
        return $this->logger;
    }
}

$app = new Application;
$app->setLogger('File Not found');
var_dump($app->getLogger());