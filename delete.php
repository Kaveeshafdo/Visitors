<?php 
require_once 'FileHandle.php'; // import an class 
$id = $_GET['subbtn']; // get id of which post is to deleted
$fileHandle = new FileHandle(); // make an object of file handler
$fileHandle->readFile(); // read file what stored in file
$arrContent = $fileHandle->getArrContent(); // get array of data stored
unset($arrContent[$id]); // remove post by id we want
$fileHandle->setArrContent($arrContent); // resned array to file handler
$fileHandle->writeFile(); // write again to file

?>