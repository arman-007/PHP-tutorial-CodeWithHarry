<?php 

    $fptr = fopen("myFile.txt", "r");

    if (!$fptr){
        die("Unable to open this file, please enter the valid filename.");
    }
    // //takes one line from the file
    // echo fgets($fptr);
    // //it will take the next line and update file pointer to that location
    // echo fgets($fptr);

    //read a file line by line
    while($a = fgets($fptr)){
        echo $a;
        echo "<br>";
    }

    echo "End of file";


?>