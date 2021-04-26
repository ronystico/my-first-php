<!DOCTYPE html>
<html>

<head>
    <title>Filelist</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <h1>Filelist</h1>
<div id="divfiles">

<?php
require 'buttons.php';
//Get a list of file paths using the glob function.
$fileList = glob('../uploads/*');
//Loop through the array that glob returned.
foreach ($fileList as $filepath) {
    $filename = basename($filepath);
    echo <<<HTML
<a href="player.php?$filename">$filename</a><br>
<button><a href="confirmdelete.php?$filename">Delete</a></button><br>
<hr>
HTML;
}
buttons();
echo "</div>";
echo "</body></html>";
?>