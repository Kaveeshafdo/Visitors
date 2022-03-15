<?php 
require_once 'FileHandle.php';
$id = $_GET['subbtn'];
$fileHandle = new FileHandle();
$fileHandle->readFile();
$arrContent = $fileHandle->getArrContent();
unset($arrContent[$id]);
$fileHandle->setArrContent($arrContent);
$fileHandle->writeFile();

?>