<?php

class FileHandle
{

    public $file = 'C:\\xampp\\htdocs\\Visitors\\info.csv';

    public function readFile()
    {
        $fh = fopen($this->file, 'r');
        while (list($name, $post, $datetime) = fgetcsv($fh, 1024, ',')) {
            printf("<p>%s , %s , %s</p>", $name, $post, $datetime);
        }
    }

    public function writeFile($pub,$content,$date)
    {
        $line = $pub." , ".$content." , ".$date;
        echo $line;
        $fh = fopen($this->file, 'r+');
        fputcsv($fh);
    }
}
