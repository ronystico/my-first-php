<!DOCTYPE html>
<html>
<head>
    <title>Player</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    </head>
<body>
<h1>Player</h1>

<?php
require 'buttons.php';
$location = "../uploads/" . substr($_SERVER['REQUEST_URI'], 16);
$extension = pathinfo($location, PATHINFO_EXTENSION);
// mime
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo,urldecode($location));
//$mimEe = mime_content_type(urldecode($location));
$name = substr(urldecode($_SERVER['REQUEST_URI']), 16);

$type = "0";
switch ($mime) {
case "image/apng":
case "image/avif":
case "image/gif":
case "image/jpeg":
case "image/tiff":
case "image/svg+xml":
case "image/webp":
case "image/bmp":
case "image/x-icon":
case "image/tiff":
case "image/png":
case "image/vnd.microsoft.icon":
$type = "image";
break;
case "video/x-msvideo":
case "video/mp4":
case "video/mpeg":
case "video/ogg":
case "video/mp2t":
case "video/webm":
case "video/3gpp":
case "video/3gpp2":
case "video/x-matroska":
$type = "video";
break;
case "audio/aac":
case "audio/midi":
case "audio/x-midi":
case "audio/mpeg":
case "audio/ogg":
case "audio/opus":
case "audio/wav":
case "audio/webm":
case "audio/3gpp":
case "audio/3gpp2":
case "audio/mp4":
case "audio/m4a":
case "audio/x-m4a":
$type = "audio";
break;
case "application/pdf":
$type = "pdf";
break;
default:
$type = "other";
break;
}

echo <<<HTML
<h2>$name</h2>
HTML;
// Source of image formats: https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types
    if ($type == "image") {
        echo <<<HTML
        <img src="$location" alt="Loading Image">
        HTML;
    }
    if ($type =="audio") {
        echo <<<HTML
        <audio controls>
        <source src="$location" type="$mime">
      Your browser does not support the audio element.
      </audio>
      HTML;
    }
    if ($type =="video") {
        echo <<<HTML
        <video controls>
        <source src="$location" type="$mime">
      Your browser does not support HTML5 video.
    </video>
    HTML;
    }
    if ($type == "other") {
        echo <<<HTML
        <p>I don't know how to preview your $mime file, please download instead</p>
        HTML;
    }
    if ($type == "pdf") {
        echo <<<HTML
        <embed src="$location" type="$mime">
        HTML;
    }
echo <<<HTML
<p>
<button><a href="$location">Open without player</a></button>
<button><a href="$location" download>Download</a></button>
<button><a href="confirmdelete.php?$name">Delete</a></button><br><br>
</p>
HTML;
buttons();
echo "</body></html>";
?>