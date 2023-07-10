<?php

echo "creating a MySQL database<br>";

// ways to connect SySQL datase:
// 1. MySQLi extension
//     1.1 Procedural way
//     1.2 Object Oriented
// 2. PDO - PHP data object

// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn)
{
    die("Failed to connect!! because " . mysqli_connect_error());
}
else
{
    echo "Connection successful!<br>";
}

//creating a database
$sql = "CREATE DATABASE armanr";

//check for error whether database is created or not
$result = mysqli_query($conn, $sql);

if ($result)
{
    echo "DB is created successfully";
}
else
{
    echo "DB not created because --->".mysqli_error($conn);
}



?>