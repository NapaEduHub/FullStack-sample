<?php

class Logger
{
    private $filename;
    private $logs = [];

    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->logs[] = "Begin: " . microtime(true);
    }

    public function __destruct()
    {
        $this->logs[] = "End: " . microtime(true);
        $this->write();
    }

    public function log($message)
    {
        $this->logs[] = $message;
    }

    private function write()
    {
        $json = json_encode($this->logs, JSON_PRETTY_PRINT);
        file_put_contents($this->filename, $json);
        echo "Written!";
    }
}

$obj = new Logger('log.txt');
$obj->log("This");
$obj->log("Is");
$obj->log("Sample");
$obj->log("Logger");
$obj->log("Class");

//$obj->logs = [];
for ($i = 0; $i < 100; $i++) {
    $obj->log("message:". $i);
}

sleep(3);
