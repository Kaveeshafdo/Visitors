<?php

class FileHandle
{

    public $file = 'info.csv';
    public $arrContent;

    public function getArrContent()
    {
        return $this->arrContent;
    }

    public function setArrContent($arr)
    {
        $this->arrContent = null;
        $this->arrContent = $arr;
    }

    public function readFile()
    {
        $this->arrContent = null;
        $this->arrContent = array();
        $fh = file($this->file);
        foreach ($fh as $line) {
            $this->arrContent[] = explode(",", $line);
        }
        return $this->arrContent;
    }
    function test_input($data)
    {
        $data1 = trim($data);
        $data2 = stripslashes($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }
    public function writeFile()
    {
        $count = 0;
        $fh = fopen($this->file, 'w');
        foreach ($this->arrContent as $arr) {
            $line =  $arr[0] . "," . $arr[1] . "," . $arr[2];
            fwrite($fh, test_input($line)."\n");
            //fputcsv($fh, $arr);
        }
        header("Location: index.php");
    }
}
