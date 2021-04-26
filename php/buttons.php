<?php
function buttons()
{
        echo <<<HTML
        <div id="buttons">
     <button><a href="/php/filelist.php">View Filelist</a></button>
     <button><a href="/html/uploader.html">Upload a File</a></button>
     <button><a href="/">Go home</a></button>
        </div>
    HTML;
}
?>