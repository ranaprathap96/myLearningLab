<?php

interface Logger {

    public function log($msg);
}

Class Application {

    private $logger;

    public function getLogger()
    {
        return $this->logger;
    }

    public function setLogger($log)
    {
        $this->logger = $log;
    }
}

$app = new Application;
$app->setLogger(new Class implements Logger {
    public function log($msg)
    {
        echo $msg;
    }
});
$app->getLogger()->log('File not exits');
