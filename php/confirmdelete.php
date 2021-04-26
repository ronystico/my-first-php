<!DOCTYPE html>
<html>
<head>
    <title>Deleting a File</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    </head>
<body>
<h1>Deleting a File</h1>

<?php
require 'buttons.php';
    $name = substr(urldecode($_SERVER['REQUEST_URI']), 23);
echo <<<HTML
<p>Are you sure you want to delete the file '$name'?</p>
<button><a href="delete.php?$name">Yes</a></button>
<button><a href="/php/filelist.php">No</a></button>
</body>

</html>
HTML;

/* if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['yes']))
    {
        $location = "../uploads/";
        $name = substr(urldecode($_SERVER['HTTP_REFERER']), 32);
        unlink($location. "/" . $name);
        header('Location: filelist.php');
     exit();
    } */
?>