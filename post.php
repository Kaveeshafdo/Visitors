
<?php
include 'index.php'; // import index 
require_once 'FileHandle.php'; // import filehandler

date_default_timezone_set("Europe/Stockholm"); // use your time zone if date and time is wrong you can check timezone and correct mistakes
$trn_date = date("Y-m-d H:i:s"); // store date and time in variable


if ($_SERVER["REQUEST_METHOD"] == "POST") { // check have request form post
    if ($_POST['publisher'] != "" && $_POST['post_content'] != "") { // if available request then check sended data is null or have
        $publisher = test_input($_POST["publisher"]); // this method uses again for check and store data in variable
        $postContent = test_input($_POST["post_content"]); // ''
    }
}
function test_input($data) // explain this on file handler
{
    $data1 = trim($data);
    $data2 = stripslashes($data1);
    $data3 = htmlspecialchars($data2);
    return $data3;
} 
$fileHandle = new FileHandle(); // create a new object of file handler
$fileHandle->readFile(); // read csv file 
$arrContent = $fileHandle->getArrContent(); // get data using object 
$arrContent[] = array($publisher,$postContent,$trn_date); // combine new data set and current stored data
$fileHandle->setArrContent($arrContent); // set array on object
$fileHandle->writeFile(); // write to file
?>