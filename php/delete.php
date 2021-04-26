<?php
$location = "../uploads/";
        $name = substr(urldecode($_SERVER['REQUEST_URI']), 16);
        unlink($location. "/" . $name);
        header('Location: filelist.php');
?>