<?php

class FileHandle
{

    public $file = 'info.csv';

<<<<<<< HEAD
    public $arrContent=array();
=======
    public $arrContent = array("Kass","dsdss","dsdcs");
>>>>>>> 0be6bd31a6ebf29f2ab6da796b7b180052e11640


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
