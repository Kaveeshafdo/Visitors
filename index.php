<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="header">
        <div class="header-name">
            <h1 class="head-name">visitor</h1>
        </div>
    </div>
    <div class="body">
        <div class="post-form">
            <form action="post.php" method="post">
                <label for="publisher">Name or Alias</label>
                <input name="publisher" id="publisher" type="text">
                <label for="post_content">Post content</label>
                <textarea name="post_content" id="post_content" cols="30" rows="10"></textarea>
                <input type="submit" id="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>


</body>

</html>

<?php
require_once 'FileHandle.php';

$fileHandle = new FileHandle();
//$fileHandle->writeFile($publisher,$postContent,$trn_date);
$final = $fileHandle->readFile();
foreach($final as $line){
   echo $line[0].$line[1].$line[2]."\n";

}


?>