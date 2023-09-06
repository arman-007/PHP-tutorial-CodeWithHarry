<?php

    //This line will print just the texts of the file
    $a = readfile("myFile.txt");
    //this will print the number of characters read at the end
    echo $a;

    echo "<br>";

    //to avoid that just call readfile function and it prints the file at the same time
    readfile("myFile.txt");

    //for image
    readfile("1.jpeg");

    //this will show the html file as it is
    readfile("file.html");

?>