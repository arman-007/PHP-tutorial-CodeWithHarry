<?php

echo "<h1> Inserting a row in a table. </h1><br>";

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

//variable to insert in table
$name = "arman";
$destination = 'Germany';

//inserting a row in a table
$sql = "INSERT INTO `phptrip` (`sno`, `name`, `dest`) VALUES ('', '$name', '$destination')";

//check for error whether a new row is inserted or not
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Record was inserted successfully";
} else {
    echo "Record insertion unsuccessful because --->" . mysqli_error($conn);
}