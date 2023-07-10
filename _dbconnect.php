<?php
    // connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "arman"; //specifying the DB to connect that exact DB

    // create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn) {
        die("Failed to connect!! because " . mysqli_connect_error());
    } else {
        echo "Connection successful!<br>";
    }
?>