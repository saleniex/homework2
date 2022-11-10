<?php

namespace App;

use App\Interfaces\LoggerInterface;

class FileLogger implements LoggerInterface
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }


    public function log(string $message, string $level): void
    {
        $formattedMessage = sprintf('%s [%s] %s' . PHP_EOL, date('c'), $level, $message);
        file_put_contents($this->fileName, $formattedMessage, FILE_APPEND);
    }
}
