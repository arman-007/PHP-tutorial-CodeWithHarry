<?php
echo "Welcome to write files in PHP";

//write mode creates the file if there isn't any with the name
//if there was a file, it will overwrite everything
// $fptr = fopen("myFile2.txt", "w");

// fwrite($fptr, "This line is added using fwrite funtion\n");
// fwrite($fptr, "This line is another line added after the first line");

//append adds new line or elements at the end of file
$fptr = fopen("myFile2.txt", "a");

fwrite($fptr, "This line is added using fwrite funtion\n");
fwrite($fptr, "This line is another line added after the first line");
?>