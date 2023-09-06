<?php 

$fptr = fopen("myFile.txt", "r");

if (!$fptr){
    die("Unable to open this file, please enter the valid filename.");
}

$content = fread($fptr, filesize("myFile.txt"));
echo $content;
fclose($fptr);
?>