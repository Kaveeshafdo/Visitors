<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" style="color: #669999; font-weight: 900; font-size: 30px" href="index.php">Visitors</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>                
                </ul>
            </div>
        </div>
    </nav>
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
//require_once 'FileHandle.php';

//$fileHandle = new FileHandle();
//$fileHandle->readFile();


?>