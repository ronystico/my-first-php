<!DOCTYPE html>
<html>
    <head>
    <title>Upload Status</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    </head>
    <body>
        <h1>Upload Status</h1>

<?php
require 'buttons.php';
$date = date('Y-m-d_his',time());
$FileType = strtolower(pathinfo(basename($_FILES["upfile"]["name"]),PATHINFO_EXTENSION));

$source = $_FILES["upfile"]["tmp_name"];
$name = $_FILES["upfile"]["name"];
$destination = "../uploads/" . $date . "." . $FileType;
$filename = basename($destination);
if (move_uploaded_file($source, $destination)){
echo "File uploaded correctly";
echo <<<HTML
<p>
<button><a href="player.php?$filename">View in Player</a></button>
</p>
HTML;
}
else {
echo <<<HTML
<p>
    Upload Error, please check
</p>
<p>
<a href="https://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize" target="_blank">upload-max-filesize</a>
<a href="https://www.php.net/manual/en/ini.core.php#ini.post-max-size" target="_blank">post-max-size</a>
<a href="https://www.php.net/manual/en/ini.core.php#ini.max-file-uploads" target="_blank">max-file-uploads</a>
</p>
HTML;
}
buttons();
echo "</body></html>";
?>