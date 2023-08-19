<?php

interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function log($message) {
        file_put_contents($this->filename, $message . "\n");
    }
}

$fileLogger = new FileLogger("log.txt");
$fileLogger->log("This is a message logged to a file.");