
<?php
include 'index.php';
include 'FileHandle.php';

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
//echo $publisher, " , ", $postContent, " , ", $trn_date;
$fileHandle = new FileHandle();
$fileHandle->writeFile($publisher,$postContent,$trn_date);
 
//$file = 'C:\\xampp\\htdocs\\Visitors\\info.csv';
//$fh = fopen($file, 'r');
//while (list($name, $post, $datetime) = fgetcsv($fh, 1024, ',')) {
//    printf("<p>%s , %s , %s</p>", $name, $post, $datetime);
//}

?>