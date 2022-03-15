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

        <?php
        require_once 'FileHandle.php';

        $fileHandle = new FileHandle();
        $arr = $fileHandle->readFile();
        for ($i = 0; $i < count($arr); $i++) {
            $arr1 = $arr[$i];
            echo '<div class="post">
    <div class="post-date">' . $arr1[2] . '</div>
    <div class="post-name">' . $arr1[0] . '</div>
    <div class="post-content">' . $arr1[1] . '</div>
    <form action="delete.php" method="GET">
    <input type="hidden" name="subbtn" value="' . $i . '">
    <input type="submit" class="delete-btn" value="Remove">
    </form></div>';
        }
        ?>
    </div>



</body>

</html>