<?php

class FileHandle
{

    public $file = 'info.csv';
    public $arrContent=array();

    public function getArrContent(){
        return $this->arrContent;
    }

    public function setArrContent($arr[]){
        $this->arrContent = $arr;
    }



    public function readFile()
    {   
        $fh = file($this->file);
        foreach($fh as $line){
            $this->arrContent[] = explode(",",$line);
        }
        return $this->arrContent;
    }

    public function writeFile($pub,$content,$date)
    {
        $line = $pub." , ".$content." , ".$date;    
        $fh = fopen($this->file, 'a+');
        fwrite($fh,"\n".$line);

    }
}
