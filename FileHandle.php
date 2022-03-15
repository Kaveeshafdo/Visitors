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

    public function writeFile($pub,$content,$date)
    {
        $line = $pub." , ".$content." , ".$date;    
        $fh = fopen($this->file, 'a+');
        fwrite($fh,"\n".$line);
    }
}
