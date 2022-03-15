<?php

class FileHandle
{

    public $file = 'info.csv'; // this is the file which used to project as datasource
    public $arrContent; // after start programme data load to this array

    public function getArrContent()  // getter method for array
    {
        return $this->arrContent; // return array
    }

    public function setArrContent($arr) // setter method for array
    {
        $this->arrContent = null; // this clears current stored data in array
        $this->arrContent = $arr; // assign new array object
    }
    

    public function readFile() // method for read file
    {
        $this->arrContent = null; //  clear current stored data for assign new arra object
        $this->arrContent = array(); // make variable as array
        $fh = file($this->file); // file as a object
        foreach ($fh as $line) { // use for loop for get data from file object ($fh)
            $this->arrContent[] = explode(",", $line); // store current data to array
        }
        return $this->arrContent; // return array to method caller
    }
    
    public function writeFile() // method for write data to csv file this method used arrContent array as a data source 
    {
        $test = new TestInput(); // make a object of testInput class
        $fh = fopen($this->file, 'w'); // open filE as writable
        foreach ($this->arrContent as $arr) {// loop array to get stored content one by one from array 
            $line =  $arr[0] . "," . $arr[1] . "," . $arr[2]; // make data to write 
            fwrite($fh, $test->test_input($line)."\n"); // write data to file write
        }
        header("Location: index.php"); // after writing redirect to index.php (HOMEPAGE)
    }
}

class TestInput{ // this class is used for check and remove unwanted contents in you entered data or array included data
    public function test_input($data) // method for check unwanted data
    {
        $data1 = trim($data); 
        $data2 = stripslashes($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

}