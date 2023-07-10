<?php

echo "creating a table in a database<br>";

// ways to connect SySQL datase:
// 1. MySQLi extension
//     1.1 Procedural way
//     1.2 Object Oriented
// 2. PDO - PHP data object

// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "arman"; //specifying the DB to connect that exact DB

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn)
{
    die("Failed to connect!! because " . mysqli_connect_error());
}
else
{
    echo "Connection successful!<br>";
}

//creating a table in database
$sql ="CREATE TABLE `phptrip` (`sno` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(15) NOT NULL , 
        `dest` VARCHAR(20) NOT NULL , PRIMARY KEY (`sno`))";

//check for error whether table is created or not
$result = mysqli_query($conn, $sql);

if ($result)
{
    echo "Table is created successfully";
}
else
{
    echo "Table not created because --->".mysqli_error($conn);
}

?>