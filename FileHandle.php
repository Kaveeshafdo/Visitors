<?php

class FileHandle
{

    public $file = 'info.csv';
    public $arrContent;

    public function readFile()
    {   
        $fh = fopen($this->file, 'r');
        while (list($name, $post, $datetime) = fgetcsv($fh, 1024, ',')) {
            $this->arrContent = array_merge($this->arrContent, array($name,$post,$datetime));
        }
    }

    public function writeFile($pub,$content,$date)
    {
        $line = $pub." , ".$content." , ".$date;
        //echo $line;
        $fh = fopen($this->file, 'a+');
        fwrite($fh, "\n".$line);
    }
}
