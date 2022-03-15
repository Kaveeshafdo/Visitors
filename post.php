
<?php
include 'index.php';
require_once 'FileHandle.php';

date_default_timezone_set("Europe/Stockholm");
$trn_date = date("Y-m-d H:i:s");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['publisher'] != "" && $_POST['post_content'] != "") {
        $publisher = test_input($_POST["publisher"]);
        $postContent = test_input($_POST["post_content"]);
    }
}
function test_input($data)
{
    $data1 = trim($data);
    $data2 = stripslashes($data1);
    $data3 = htmlspecialchars($data2);
    return $data3;
}
$fileHandle = new FileHandle();
$fileHandle->readFile();
$arrContent = $fileHandle->getArrContent();
$arrContent[] = array($publisher,$postContent,$trn_date);
$fileHandle->setArrContent($arrContent);
$fileHandle->writeFile();
?>