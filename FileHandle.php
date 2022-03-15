<?php

class FileHandle
{

    public $file = 'info.csv';

    public function readFile()
    {
        $fh = fopen($this->file, 'r');
        while (list($name, $post, $datetime) = fgetcsv($fh, 1024, ',')) {
            printf("<p>%s , %s , %s</p>", $name, $post, $datetime);
        }
    }

    public function writeFile($line)
    {
        $fh = fopen($this->file, 'r+');
        fputcsv($fh,$line);
    }
}
